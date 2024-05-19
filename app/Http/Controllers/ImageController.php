<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    function create(){
        $images = Image::all();
        return view('create', compact('images'));
    }

    function create1(Request $request){
        $request->validate([
            'image' => ['required', 'image'],
        ]);

        $filename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/public'.'/'.$filename);

        Image::create([
            'image' => $filename,
        ]);

        return redirect('/welcome');
    }

    function welcome(){
        $images = Image::all();
        return view('welcome', compact('images'));
    }
}
