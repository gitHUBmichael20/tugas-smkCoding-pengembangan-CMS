<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryImage extends Controller
{
    //
    public function index()
    {
        $galleries = Gallery::latest()->paginate(8);
        return view('gallery.gallery', compact('galleries'));
    }
}
