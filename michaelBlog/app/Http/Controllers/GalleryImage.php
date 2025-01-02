<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryImage extends Controller
{
    public function index()
    {
        $galleries = Gallery::simplePaginate(12);
        return view('gallery.gallery-pages', compact('galleries'));
    }

}