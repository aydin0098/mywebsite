<?php

namespace Modules\Education\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Education\Entities\Education;
use function back;
use function redirect;
use function toastr;
use function view;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_educations')->only(['index']);
        $this->middleware('can:add_education')->only(['create']);
        $this->middleware('can:delete_education')->only(['destroy']);
        $this->middleware('can:edit_education')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('education::educations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education::educations.create');
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
        Education::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        toastr()->success('مدرک تحصیلی ایجاد شد');
        return redirect()->route('educations.index');
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
        $education = Education::find($id);
        return view('education::educations.edit',compact('education'));
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
        $education = Education::find($id);
        $education->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        toastr()->success('مدرک تحصیلی ویرایش شد');
        return redirect()->route('educations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
        toastr()->success('مدرک تحصیلی حذف شد');
        return back();
    }
}
