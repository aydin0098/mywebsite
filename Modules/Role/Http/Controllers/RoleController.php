<?php

namespace Modules\Role\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Role\Entities\Role;
use function back;
use function redirect;
use function toastr;
use function view;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_roles')->only(['index']);
        $this->middleware('can:add_role')->only(['create']);
        $this->middleware('can:delete_role')->only(['destroy']);
        $this->middleware('can:edit_role')->only(['edit', 'update']);
        $this->middleware('can:role_permission')->only(['permissions']);
        $this->middleware('can:role_permission')->only(['permissionsPost']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('role::roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role::roles.create');
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

        Role::create([
            'name' => $request->name,
            'label' => $request->label
        ]);
        toastr()->success('نقش ایجاد شد');
        return redirect()->route('roles.index');
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
        $role = Role::find($id);
        return view('role::roles.edit',compact('role'));
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
        $role = Role::find($id);
        $role->update([
            'name' => $request->name,
            'label' => $request->label
        ]);
        toastr()->success('نقش ویرایش شد');
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        toastr()->success('نقش حذف شد');
        return back();
    }

    public function permissions($id)
    {
        $role = Role::find($id);
        return view('role::roles.permissions',compact('role'));
    }

    public function permissionsPost(Request $request , $id)
    {
        $role = Role::find($id);
        $role->permissions()->sync($request->permissions);
        toastr()->success('دسترسی برای نقش انتخابی ست شد');
        return redirect()->route('role.permission',$role->id);

    }

}
