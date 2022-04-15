<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Article\Entities\Article;
use function auth;
use function redirect;
use function toastr;
use function updateImage;
use function uploadImage;
use function view;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_articles')->only(['index']);
        $this->middleware('can:add_article')->only(['create']);
        $this->middleware('can:delete_article')->only(['destroy']);
        $this->middleware('can:edit_article')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article::articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article::articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => uploadImage('articles',$request->image),
            'user_id' => auth()->user()->id,
            'keywords' => $request->keywords,
            'tags' => $request->tags,
            'status' => $request->status
        ]);

        $article->categories()->sync($request->category_id);
        toastr()->success('مقاله ایجاد شد');

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article::articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

            $article->update([
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => auth()->user()->id,
                'keywords' => $request->keywords,
                'tags' => $request->tags,
                'status' => $request->status
            ]);
        if ($request->hasFile('image')){
            $article->update([
                'image' => updateImage('articles',$request->image,$article->image)
            ]);
        }


        $article->categories()->sync($request->category_id);
        toastr()->success('مقاله ویرایش شد');

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article->image){
            unlink('storage'.'/'.$article->image);
            $article->delete();
        }
        $article->delete();
        toastr()->success('تغییرات حذف شد');
        return redirect()->route('articles.index');
    }
}
