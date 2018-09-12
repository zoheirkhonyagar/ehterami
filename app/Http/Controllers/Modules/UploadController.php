<?php

namespace App\Http\Controllers\Modules;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;
use App\Http\Requests\ImageUploadRequest;

class UploadController extends Controller
{
    public function uploadImage($file)
    {

        if ($file) {
            
            $uniqName = $this->getUniqName($file);
            
            try{
            
                $file->move('uploads' , $uniqName);
            
            }catch(\Exception $e){
        
                return $e;        
            
            }
            
            return $uniqName;
        
        }
        
            return false;
    }

    public function multiUpload(ImageUploadRequest $request)
    {
        if ($request->hasFile('images')) {
        
            foreach($request->images as $image){   
                
                $file[] = $this->getUniqName($image);
                
                try{
                
                    $image->move('uploads' , end($file));
                
                }catch(\Exception $e){
                
                    return response()->json($e);        
                
                }

            };
            
            return response()->json($file);
        
        }
            return response()->json(false);
    }

    public function getUniqName($file)
    {
        $originalName = $this->getRegularName($file->getClientOriginalName()); 
        
        $uniqName = uniqid('img-') . '-' . $originalName;
        
        return $uniqName;
    }

    public function getRegularName($name)
    {
        $characters = ['_',' '];
        
        $name = preg_replace(['/ +/' , '/_+/'], ' ', $name);
        
        $name = str_replace( $characters, '-', $name );
        
        return $name;
    }

    
}
