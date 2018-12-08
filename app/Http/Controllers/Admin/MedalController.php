<?php

namespace App\Http\Controllers\Admin;

use App\Medal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\UploadController;


class MedalController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medals = Medal::orderBy('id', 'desc')->get();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.about-us.medals.index' , compact('medals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about-us.medals.create');
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
            'image' => 'required|mimes:jpg,jpeg,bmp,png'
        ]);
        
        $image = $request->file('image');
        
        $filename = $this->getUniqName($request->image);

        $image->move(public_path('uploads/') , $filename);

        Medal::create([
            'title' => $request->title,
            'image' => $filename
        ]);

        return redirect(route('medal.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medal  $medal
     * @return \Illuminate\Http\Response
     */
    public function show(Medal $medal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medal  $medal
     * @return \Illuminate\Http\Response
     */
    public function edit(Medal $medal)
    {
        return view('admin.about-us.medals.edit' , compact('medal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medal  $medal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medal $medal)
    {
        $this->validate($request , [

            'title' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png'
        
        ]);

        $file = $request->file('image');
        
        $filename = '';
        
        if ($file) {

            $filename = $this->getUniqName($request->image);

            $file->move(public_path('uploads/') , $filename);
                    
        } else {
        
            $filename = $medal->image;
        
        }

        $medal->update([
        
            'title' => $request->title,
            'image' => $filename,
        
        ]);

        return redirect(route('medal.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medal  $medal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medal $medal)
    {
        $medal->delete();
        return redirect(route('medal.index'));
    }
}
