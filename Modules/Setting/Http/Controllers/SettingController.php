<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function back;
use function setting_update;
use function toastr;
use function updateImage;
use function view;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_settings')->only(['index']);
        $this->middleware('can:manage_settings')->only(['update']);

    }
    public function index()
    {
        return view('setting::settings.index');

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'site_name' => 'required',
            'site_icon' => '',
            'site_logo' => '',
            'site_text_logo' => '',
            'email' => '',
            'phone' => '',
            'author' => '',
            'author_job' => '',
            'copyright' => '',
            'map' => '',
            'service_head' => '',
            'service_color' => '',
            'work_head' => '',
            'portfolio_head' => '',
            'portfolio_color' => '',
            'blog_head' => '',
            'blog_btn' => '',
            'contact_text_form' => '',
            'contact_desc' => '',
            'contact_head' => '',
        ]);

        $settings['site_title'] = $request->site_name;
        $settings['email'] = $request->email ? $request->email : '';
        $settings['phone'] = $request->phone ? $request->phone : '';
        $settings['copyright'] = $request->copyright ? $request->copyright : '';
        $settings['site_text_logo'] = $request->site_text_logo ? $request->site_text_logo : '';
        $settings['author'] = $request->author ? $request->author : '';
        $settings['author_job'] = $request->author_job ? $request->author_job : '';
        $settings['service_head'] = $request->service_head ? $request->service_head : '';
        $settings['service_color'] = $request->service_color ? $request->service_color : '';
        $settings['work_head'] = $request->work_head ? $request->work_head : '';
        $settings['portfolio_head'] = $request->portfolio_head ? $request->portfolio_head : '';
        $settings['portfolio_color'] = $request->portfolio_color ? $request->portfolio_color : '';
        $settings['blog_head'] = $request->blog_head ? $request->blog_head : '';
        $settings['blog_btn'] = $request->blog_btn ? $request->blog_btn : '';
        $settings['contact_text_form'] = $request->contact_text_form ? $request->contact_text_form : '';
        $settings['contact_desc'] = $request->contact_desc ? $request->contact_desc : '';
        $settings['contact_head'] = $request->contact_head ? $request->contact_head : '';
        $settings['seo_description'] = $request->seo_description ? $request->seo_description : '';
        $settings['keywords'] = $request->keywords ? $request->keywords : '';
        $settings['plugins'] = $request->plugins ? $request->plugins : '';
        if ($request->hasFile('site_icon')){
            $settings['site_icon'] = updateImage('settings',$request->site_icon,setting('site_icon'));
        }

        if ($request->hasFile('site_logo')){
            $settings['site_logo'] = updateImage('settings',$request->site_logo,setting('site_logo'));
        }

        foreach ($settings as $setting => $value) {
            setting_update($setting, $value);
        }
        toastr()->success('تغییرات ذخیره شد');
        return back();

    }
}
