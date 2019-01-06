<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\UploadController;

class PortfolioController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(10);
        return view('admin.portfolio.index' , compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        return view('admin.portfolio.create' , compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,bmp,png',
            'body' => 'required',
            'subcategory_id' => 'required|numeric'
        ]);

        $image = $request->file('image');

        $filename = $this->getUniqName($request->image);

        $image->move(public_path('uploads/') , $filename);

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->image = $filename;
        $portfolio->body = $request->body;
        $portfolio->save();
        $portfolio->subcategories()->attach($request->subcategory_id);

        return redirect(route('portfolio.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $subcategories = Subcategory::all();
        return view('admin.portfolio.edit' , compact('subcategories','portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->validate($request , [

            'title' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png',
            'body' => 'required',
            'subcategory_id' => 'required|numeric'

        ]);

        $file = $request->file('image');

        $filename = '';

        if ($file) {

            $filename = $this->getUniqName($request->image);

            $file->move(public_path('uploads/') , $filename);

        } else {

            $filename = $portfolio->image;

        }

        $portfolio->update([

            'title' => $request->title,
            'body' =>  $request->body,
            'image' => $filename,

        ]);

        $subcategory = $portfolio->subcategories()->first()->id;

        if( $subcategory !== $request->subcategory_id ) {
            $portfolio->subcategories()->detach($subcategory);
            $portfolio->subcategories()->attach($request->subcategory_id);
        }

        return redirect(route('portfolio.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect(route('portfolio.index'));
    }
}
