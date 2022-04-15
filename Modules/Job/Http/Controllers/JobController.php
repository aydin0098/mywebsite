<?php

namespace Modules\Job\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Favorite\Entities\Favorite;
use Modules\Job\Entities\Job;

class JobController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage_jobs')->only(['index']);
        $this->middleware('can:add_job')->only(['create']);
        $this->middleware('can:delete_job')->only(['destroy']);
        $this->middleware('can:edit_job')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $jobs = Job::all();
        return view('job::index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('job::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'office' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);
        Job::create([
            'title' => $request->title,
            'description' => $request->description,
            'office' => $request->office,
            'end_date' => $request->end_date,
            'start_date' => $request->start_date,
        ]);
        toastr()->success('سابقه جدید ایجاد شد');
        return redirect()->route('jobs.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
//        return view('job::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('job::edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->update([
            'title' => $request->title,
            'description' => $request->description,
            'office' => $request->office,
            'end_date' => $request->end_date,
            'start_date' => $request->start_date,
        ]);
        toastr()->success('سابقه ویرایش شد');
        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        toastr()->success('سابقه حذف شد');
        return redirect()->route('jobs.index');
    }
}
