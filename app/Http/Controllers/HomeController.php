<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Article\Entities\Article;
use Modules\Category\Entities\Category;
use Modules\Contact\Entities\Contact;
use Modules\Education\Entities\Education;
use Modules\Job\Entities\Job;
use Modules\Portfolio\Entities\Portfolio;
use Modules\Skill\Entities\Skill;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all();
        $jobs = Job::all();
        $educations = Education::all();
        $skills = Skill::all();
        $articles = Article::orderBy('created_at','desc')->take(4)->get();
        $portfolios = Portfolio::all();

        return view('front.index',compact('category','articles','jobs'
        ,'educations','skills','portfolios'));
    }

    public function blog()
    {
        return view('front.blog.index');

    }

    public function singleBlog($id)
    {
        $article = Article::find($id);
        return view('front.blog.single',compact('article'));

    }

    public function addComment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'comment' => 'required'
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment'  => $request->comment
        ]);

        toastSuccess('نظر شما ثبت شد');
        return back();


    }
}
