<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'deadline' => 'required|date',
        'status' => 'required|in:pending,in_progress,completed',
    ]);

    // Store the project
    $project = Project::create($validated);

    // Redirect to the index page with the new project data
    return redirect()->route('projects.index')->with('success', 'Project created successfully!');
}

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
{
    // Validate the request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'deadline' => 'required|date',
        'status' => 'required|in:pending,in_progress,completed',
    ]);

    // Find the project and update
    $project = Project::findOrFail($id);
    $project->update($validated);

    // Redirect to the index page with a success message
    return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
}


    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
