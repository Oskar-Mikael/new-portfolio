<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('index', compact('projects'));
    }
}
