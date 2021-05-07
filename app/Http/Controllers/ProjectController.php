<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

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

        return redirect('/admin');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::findOrFail($id);

        $data = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'img_path' => 'required',
            'github_link' => 'required',
        ]);

        if ($project->img_path) {
            if (File::exists("storage/{$project->img_path}")) {
                File::delete("storage/{$project->img_path}");
            }
        }

        if (request('img_path')) {
            $imagePath = request('img_path')->store('project_images', 'public');
        }

        $project->update([
            'title' => $data['title'],
            'body' => $data['body'],
            'img_path' => $imagePath,
            'github_link' => $data['github_link'],
        ]);

        return redirect('/admin');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/admin');
    }
}
