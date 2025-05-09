<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::without('category', 'tags')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('admin.posts.form', [
            'categories' => Category::orderBy('name')->get(),
            'tags' => Tag::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
    */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
    */
    public function destroy(Post $post)
    {
        //
    }
}