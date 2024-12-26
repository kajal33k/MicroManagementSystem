<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller

{
    public function index()
    {
        $projects = Configuration::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'deadline' => 'nullable|date',
        ]);

        Configuration::create($request->all());
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Configuration $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Configuration $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Configuration $project)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'deadline' => 'nullable|date',
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Configuration $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
