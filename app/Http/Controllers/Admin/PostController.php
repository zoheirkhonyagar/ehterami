<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\UploadController;

class PostController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.post.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
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
        ]);

        $image = $request->file('image');

        $filename = $this->getUniqName($request->image);

        $image->move(public_path('uploads/') , $filename);

        Post::create([
            'title' => $request->title,
            'image' => $filename,
            'body' => $request->body,
        ]);

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request , [

            'title' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png',
            'body' => 'required',

        ]);

        $file = $request->file('image');

        $filename = '';

        if ($file) {

            $filename = $this->getUniqName($request->image);

            $file->move(public_path('uploads/') , $filename);

        } else {

            $filename = $post->image;

        }

        $post->update([

            'title' => $request->title,
            'body' =>  $request->body,
            'image' => $filename,

        ]);

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('post.index'));
    }
}
