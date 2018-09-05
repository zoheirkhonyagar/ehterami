<?php

namespace App\Http\Controllers\Modules;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;
use App\Http\Requests\ImageUploadRequest;

class UploadController extends Controller
{
    public function uploadImage(ImageUploadRequest $request)
    {



        if ($request->hasFile('images')) {
            foreach($request->images as $image){
                $file[] = $this->getUniqName($image);
                // $image->move('uploads' , $image->getClientOriginalName());
            };
            return response()->json($file);         
        }
            return response()->json(false);
    }

    public function multiUpload()
    {

    }

    protected function getUniqName($file)
    {
        $uniqueName = uniqid('img-');
        return $uniqueName;
    }
}
