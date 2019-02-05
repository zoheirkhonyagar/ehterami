<?php

namespace App\Http\Controllers\Admin;

use App\AboutUsHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\UploadController;


class AboutUsHistoryController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = AboutUsHistory::orderBy('id', 'desc')->first();
        return view('admin.about-us.history.index' , compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about-us.history.create');
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
            'body' => 'required',
            'image' => 'required|mimes:jpg,jpeg,bmp,png'
        ]);
        
        $image = $request->file('image');
        
        $filename = $this->getUniqName($request->image);

        $image->move(public_path('uploads/') , $filename);

        AboutUsHistory::create([
            'body' => $request->body,
            'image' => $filename
        ]);

        return redirect(route('about-us-history.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutUsHistory  $aboutUsHistory
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUsHistory $aboutUsHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUsHistory  $aboutUsHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUsHistory $aboutUsHistory)
    {
        return view('admin.about-us.history.edit' , compact('aboutUsHistory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUsHistory  $aboutUsHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUsHistory $aboutUsHistory)
    {
        $this->validate($request , [

            'body' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png'
        
        ]);

        $file = $request->file('image');
        
        $filename = '';
        
        if ($file) {

            $filename = $this->getUniqName($request->image);

            $file->move(public_path('uploads/') , $filename);
                    
        } else {
        
            $filename = $aboutUsHistory->image;
        
        }

        $aboutUsHistory->update([
        
            'body' => $request->body,
            'image' => $filename,
        
        ]);

        return redirect(route('about-us-history.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUsHistory  $aboutUsHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUsHistory $aboutUsHistory)
    {
        //
    }
}
