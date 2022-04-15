<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\User;
use function back;
use function redirect;
use function toastr;
use function view;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_users')->only(['index']);
        $this->middleware('can:add_user')->only(['create']);
        $this->middleware('can:delete_user')->only(['destroy']);
        $this->middleware('can:edit_user')->only(['edit', 'update']);
        $this->middleware('can:permission_user')->only(['permissions']);
        $this->middleware('can:permission_user')->only(['permissionsPost']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user::users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user::users.create');
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
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        toastr()->success('کاربر ایجاد شد');

        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view('user::users.edit',compact('user'));
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
        $user = User::find($id);
       $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        toastr()->success('کاربر ویرایش شد');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        toastr()->success('کاربر حذف شد');
        return back();

    }
    public function permissions($id)
    {
        $user = User::find($id);
        return view('admin.users.permissions',compact('user'));
    }

    public function permissionsPost(Request $request , $id)
    {
        $user = User::find($id);
        $user->permissions()->sync($request->permissions);
        toastr()->success('دسترسی برای کاربر ایجاد شد');
        return redirect()->route('admin.users.permission',$user->id);

    }
}
