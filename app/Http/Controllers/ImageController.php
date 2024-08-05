<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    function upload(Request $req){
        $path = $req->file('file')->store('public');
        $pathArray = explode("/",$path);
        $imgPath = $pathArray[1];
        $img =new Image();
        $img->path = $imgPath;
        if($img->save()){

            return redirect('imageList');
        }else{
            return "No Upload image";
        }
    }
    function list(){
        $image = Image::all();
        return view('displayimg',['image' => $image]);

    }
}
