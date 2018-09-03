<?php

namespace App\Http\Controllers\Modules;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = [
                'filename' => $request->image->getClientOriginalName(),
                'extension' => $request->image->getClientOriginalExtension(),
                'mimType' => $request->image->getClientMimeType(),
                'size' => $request->image->getSize() / 1000000 . ' Mb',
            ];
            return $file;
            return response()->json(true);
        }
        return response()->json(false);
    }
}
