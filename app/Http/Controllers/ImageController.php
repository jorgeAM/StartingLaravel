<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('admin.images.index')->with('images', $images);
    }

}
