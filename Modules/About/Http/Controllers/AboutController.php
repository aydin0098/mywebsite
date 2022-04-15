<?php

namespace Modules\About\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function back;
use function personal_update;
use function toastr;
use function updateImage;
use function view;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_about')->only(['index']);
        $this->middleware('can:manage_about')->only(['update']);

    }
    public function index()
    {
        return view('about::about.index');

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'about_headline' => '',
            'about_title' => '',
            'about_name' => '',
            'about_description' => '',
            'about_job' => '',
            'about_edu' => '',
            'about_portfolio' => '',
            'about_address' => '',
            'about_work' => '',
            'about_pic' => '',
        ]);

        $home['about_headline'] = $request->about_headline ?  $request->about_headline : '';
        $home['about_title'] = $request->about_title ? $request->about_title : '';
        $home['about_name'] = $request->about_name ? $request->about_name : '';
        $home['about_description'] = $request->about_description ? $request->about_description : '';
        $home['about_edu'] = $request->about_edu ? $request->about_edu : '';
        $home['about_job'] = $request->about_job ? $request->about_job : '';
        $home['about_portfolio'] = $request->about_portfolio ? $request->about_portfolio : '';
        $home['about_address'] = $request->about_address ? $request->about_address : '';
        $home['about_work'] = $request->about_work ? $request->about_work : 0;
        if ($request->hasFile('about_pic')){
            $home['about_pic'] = updateImage('personal',$request->about_pic,personal('about_pic'));
        }

        foreach ($home as $row => $value) {
            personal_update($row, $value);
        }
        toastr()->success('تغییرات اعمال شد');
        return back();

    }
}
