<?php

namespace Modules\Reward\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Reward\Entities\Reward;
use function back;
use function redirect;
use function toastr;
use function updateImage;
use function uploadImage;
use function view;

class RewardController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_rewards')->only(['index']);
        $this->middleware('can:add_reward')->only(['create']);
        $this->middleware('can:delete_reward')->only(['destroy']);
        $this->middleware('can:edit_reward')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewards = Reward::all();
        return view('reward::rewards.index',compact('rewards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reward::rewards.create');
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
            'image' => 'required'
        ]);
        Reward::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => uploadImage('rewards',$request->image)
        ]);
        toastr()->success('جایزه ایجاد شد');
        return redirect()->route('rewards.index');
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
        $reward = Reward::find($id);
        return view('reward::rewards.edit',compact('reward'));
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
        $reward = Reward::find($id);
        $reward->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);
        if ($request->hasFile('image')){
            $reward->update([

                'image' => updateImage('rewards',$request->image,$reward->image)

            ]);

        }
        toastr()->success('جایزه ویرایش شد');
        return redirect()->route('rewards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reward = Reward::find($id);
        $reward->delete();
        toastr()->success('جایزه حذف شد');
        return back();
    }
}
