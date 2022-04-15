<?php

namespace Modules\Skill\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Skill\Entities\Skill;
use function redirect;
use function toastr;
use function view;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_skills')->only(['index']);
        $this->middleware('can:add_skill')->only(['create']);
        $this->middleware('can:delete_skill')->only(['destroy']);
        $this->middleware('can:edit_skill')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('skill::skills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill::skills.create');
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
            'average' => 'required'
        ]);
        Skill::create([
            'title' => $request->title,
            'average' => $request->average,
        ]);
        toastr()->success('مهارت ایجاد شد');
        return redirect()->route('skills.index');
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
        $skill = Skill::find($id);
        return view('skill::skills.edit',compact('skill'));
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
        $skill = Skill::find($id);
        $skill->update([
            'title' => $request->title,
            'average' => $request->average,
        ]);
        toastr()->success('مهارت ویرایش شد');
        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        toastr()->success('مهارت حذف شد');
        return redirect()->route('skills.index');
    }
}
