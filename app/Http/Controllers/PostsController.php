<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;

class PostsController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::with('likes')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Store a newly created post view.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return view('posts.create');
    }
}