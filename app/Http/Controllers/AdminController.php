<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Post;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index() 
    {
        $projects = Project::all();
        $posts = Post::all();
        return view('admin.index', compact('projects', 'posts'));
    }
}
