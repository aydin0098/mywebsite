<?php

namespace Modules\Favorite\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Favorite\Entities\Favorite;
use function redirect;
use function toastr;
use function view;

class FavoriteController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Favorite::all();
        return view('favorite::jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('favorite::jobs.create');
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
            'description' => 'nullable',
            'icon' => 'required'
        ]);
        Favorite::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon
        ]);
        toastr()->success('سابقه جدید ایجاد شد');
        return redirect()->route('favorites.index');
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
        $job = Favorite::find($id);
        return view('favorite::jobs.edit',compact('job'));
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
        $job = Favorite::find($id);
        $job->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon
        ]);
        toastr()->success('سابقه ویرایش شد');
        return redirect()->route('favorites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Favorite::find($id);
        $job->delete();
        toastr()->success('سابقه حذف شد');
        return redirect()->route('favorites.index');
    }
}
