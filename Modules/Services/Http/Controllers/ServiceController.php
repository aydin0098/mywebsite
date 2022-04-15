<?php

namespace Modules\Services\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Services\Entities\Service;
use function redirect;
use function toastr;
use function view;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_services')->only(['index']);
        $this->middleware('can:add_service')->only(['create']);
        $this->middleware('can:delete_service')->only(['destroy']);
        $this->middleware('can:edit_service')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','desc')->get();
        return view('services::services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services::services.create');
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
            'icon' => '',
            'title' => 'required',
            'description' => '',
        ]);
        Service::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        toastr()->success('سرویس ایجاد شد');
        return redirect()->route('services.index');
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
        $service = Service::find($id);
        return view('services::services.edit',compact('service'));
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
        $service = Service::find($id);
        $service->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        toastr()->success('سرویس ویرایش شد');
        return redirect()->route('services.index')->with(['success'=>'سرویس ویرایش شد']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        toastr()->success('سرویس حذف شد');
        return redirect()->route('services.index')->with(['success'=>'سرویس حذف شد']);
    }
}
