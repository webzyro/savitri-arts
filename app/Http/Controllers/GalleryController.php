<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Gallery::active()->get();

        return view('gallery', ['photos' => $photos]);
    }
}
