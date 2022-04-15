<?php

namespace Modules\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function back;
use function toastr;
use function updateImage;
use function view;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard::admin.dashboard.index');
    }

    public function profileEdit()
    {
        return view('dashboard::admin.dashboard.profile');
    }

    public function profileUpdate(Request $request ,$id)
    {
        $user = \Modules\User\Entities\User::find($id);
        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);
        if ($request->hasFile('image')){
            $user->update([
                'image' => updateImage('profile',$request->image,$user->image)
            ]);
        }
        toastr()->success('اطلاعات ویرایش شد');

        return back()->with(['success' => 'اطلاعات ویرایش شد']);


    }
}
