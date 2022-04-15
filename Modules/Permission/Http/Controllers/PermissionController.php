<?php

namespace Modules\Permission\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Permission\Entities\Permission;
use function back;
use function redirect;
use function toastr;
use function view;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_permissions')->only(['index']);
        $this->middleware('can:add_permission')->only(['create']);
        $this->middleware('can:delete_permission')->only(['destroy']);
        $this->middleware('can:edit_permission')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permission::permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permission::permissions.create');
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
            'name' => 'required',
            'label' => 'required'
        ]);

        Permission::create([
            'name' => $request->name,
            'label' => $request->label
        ]);
        toastr()->success('دسترسی ایجاد شد');
        return redirect()->route('permissions.index');
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
        $permission = Permission::find($id);
        return view('permission::permissions.edit',compact('permission'));
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
        $permission = Permission::find($id);
        $permission->update([
            'name' => $request->name,
            'label' => $request->label
        ]);
        toastr()->success('دسترسی ویرایش شد');
        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        toastr()->success('دسترسی حذف شد');
        return back();
    }
}
