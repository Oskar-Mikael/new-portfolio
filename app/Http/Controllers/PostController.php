<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $data['title'],
            'body' => $data['body'],
        ]);

        return redirect('/admin');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
}
