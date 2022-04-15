<?php

namespace Modules\Social\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Social\Entities\Social;
use function redirect;
use function toastr;
use function toastSuccess;
use function view;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_settings')->only(['index']);
        $this->middleware('can:manage_settings')->only(['create','store']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('social::socials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('social::socials.create');
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
            'icon' => 'required',
            'name' => 'required',
            'link' => 'required',
        ]);
        Social::create([
            'icon' => $request->icon,
            'name' => $request->name,
            'link' => $request->link,
        ]);
        toastr()->success('شبکه اجتماعی ایجاد شد');
        return redirect()->route('socials.index');
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
        $social = Social::find($id);
        return view('social::socials.edit',compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
       $social->update([
            'icon' => $request->icon,
            'name' => $request->name,
            'link' => $request->link,
        ]);
       toastSuccess('ویرایش انجام شد');
       return redirect()->route('socials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        $social->delete();
        toastSuccess('حذف انجام شد');
        return redirect()->route('socials.index');
    }
}
