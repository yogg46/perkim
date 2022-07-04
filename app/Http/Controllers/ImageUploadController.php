<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function addImage()
    {
        return view('pengaju.index');
    }
    //Store image
    public function storeImage(Request $request)
    {
        $data = new File();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('pengajuan.index');
    }
    //View image
    public function viewImage()
    {
        return view('pengaju.index');
    }
}