<?php

namespace App\Http\Controllers\Admin;

use App\Slogan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\UploadController;

class SloganController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slogans = Slogan::all();
        return view('admin.main-page.slogans.index' , compact('slogans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main-page.slogans.create');
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
            'priority' => 'nullable|numeric',
            'image' => 'required|mimes:jpg,jpeg,bmp,png'
        ]);

        $image = $request->file('image');
        
        $filename = $this->getUniqName($request->image);

        $image->move(public_path('uploads/') , $filename);

        Slogan::create([
            'title' => $request->title,
            'priority' =>  $request->priority,
            'image' => $filename
        ]);

        return redirect(route('slogan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function show(Slogan $slogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function edit(Slogan $slogan)
    {
        return view('admin.main-page.slogans.edit',compact('slogan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slogan $slogan)
    {
        $this->validate($request , [

            'title' => 'nullable',
            'priority' => 'nullable|numeric',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png'
        
        ]);

        $file = $request->file('image');
        
        $filename = '';
        
        if ($file) {

            $filename = $this->getUniqName($request->image);

            $file->move(public_path('uploads/') , $filename);
                    
        } else {
        
            $filename = $slogan->image;
        
        }

        $slogan->update([
        
            'title' => $request->title,
            'priority' =>  $request->priority,
            'image' => $filename,
        
        ]);

        return redirect(route('slogan.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slogan $slogan)
    {
        $slogan->delete();
        return redirect(route('slogan.index'));
    }
}
