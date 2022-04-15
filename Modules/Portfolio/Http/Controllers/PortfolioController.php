<?php

namespace Modules\Portfolio\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Portfolio\Entities\Portfolio;
use function back;
use function redirect;
use function toastr;
use function updateImage;
use function uploadImage;
use function view;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage_portfolio')->only(['index']);
        $this->middleware('can:add_portfolio')->only(['create']);
        $this->middleware('can:delete_portfolio')->only(['destroy']);
        $this->middleware('can:edit_portfolio')->only(['edit', 'update']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio::portfolios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio::portfolios.create');
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
            'image' => 'required',
            'category_id' => 'required'
        ]);
        $portfolio = Portfolio::create([
            'title' => $request->title,
            'image' => uploadImage('portfolios',$request->image)
        ]);
        $portfolio->categories()->sync($request->category_id);
        toastr()->success('نمونه کار ایجاد شد');
        return redirect()->route('portfolios.index');
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
        $portfolio = Portfolio::find($id);
        return view('portfolio::portfolios.edit',compact('portfolio'));
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
        $portfolio = Portfolio::find($id);
        $portfolio->update([
            'title' => $request->title,
        ]);
        if ($request->hasFile('image')){
            $portfolio->update([

                'image' => updateImage('portfolios',$request->image,$portfolio->image)

            ]);

        }
        $portfolio->categories()->sync($request->category_id);
        toastr()->success('نمونه کار ویرایش شد');
        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio->image){
            unlink('storage'.'/'.$portfolio->image);
            $portfolio->delete();
        }
        $portfolio->delete();
        toastr()->success('نمونه کار حذف شد');
        return back();
    }
}
