<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'img_path' => 'required',
            'github_link' => 'required',
        ]);

        if (request('img_path')) {
            $imagePath = request('img_path')->store('project_images', 'public');
        }

        Project::create([
            'title' => $data['title'],
            'body' => $data['body'],
            'img_path' => $imagePath,
            'github_link' => $data['github_link'],
        ]);

        return redirect('/');
    }
}
