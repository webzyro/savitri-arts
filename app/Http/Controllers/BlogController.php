<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_active', true)->latest()->get();

        return view('blog.index', ['blogs' => $blogs]);
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $allBlogs = Blog::where('is_active', true)
            ->where('slug', '!=', $slug)
            ->latest()
            ->take(5)
            ->get();

        return view('blog.show', ['blog' => $blog, 'allBlogs' => $allBlogs]);
    }
}
