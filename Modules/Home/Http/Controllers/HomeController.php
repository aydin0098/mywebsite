<?php

namespace Modules\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function back;
use function home_update;
use function toastr;
use function updateImage;
use function view;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage_home')->only(['index']);
        $this->middleware('can:manage_home')->only(['update']);

    }


    public function index()
    {
        return view('home::home.index');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'home_headline' => '',
            'home_title' => '',
            'home_description' => '',
            'home_cv' => '',
            'home_pic' => '',
            'home_color' => '',
            'home_color' => '',
            'home_freelancer' => '',
            'home_footer' => '',
            'home_audio' => '',
        ]);

        $home['home_headline'] = $request->home_headline ?  $request->home_headline : '';
        $home['home_title'] = $request->home_title ? $request->home_title : '';
        $home['home_description'] = $request->home_description ? $request->home_description : '';
        $home['home_color'] = $request->home_color ? $request->home_color : '';
        $home['home_freelancer'] = $request->home_freelancer ? $request->home_freelancer : '';
        $home['home_footer'] = $request->home_footer ? $request->home_footer : '';

        if ($request->hasFile('home_cv')){
            $home['home_cv'] = updateImage('home',$request->home_cv,home('home_cv'));
        }

        if ($request->hasFile('home_audio')){
            $home['home_audio'] = updateImage('home',$request->home_audio,home('home_audio'));
        }

        if ($request->hasFile('home_pic')){
            $home['home_pic'] = updateImage('home',$request->home_pic,home('home_pic'));
        }

        foreach ($home as $row => $value) {
            home_update($row, $value);
        }
        toastr()->success('تغییرات اعمال شد');
        return back();

    }
}
