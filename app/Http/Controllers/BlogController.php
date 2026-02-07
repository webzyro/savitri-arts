<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_active', true)->get();

        // if (!$blogs) {
        //     return redirect()->back()->with('error', 'No blogs found');
        // }

        dd($blogs);

        return view('blogs', ['blogs' => $blogs]);
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        if (!$blog) {
            return redirect()->back()->with('error', 'No blog found');
        }

        return view('blog', ['blog' => $blog]);
    }
}
