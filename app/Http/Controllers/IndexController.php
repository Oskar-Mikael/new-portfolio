<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $posts = Post::latest()->paginate(3);

        return view('index', compact('projects', 'posts'));
    }
}
