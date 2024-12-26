<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
   

    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        Todo::create($request->all());

        return redirect()->route('todos.index');
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
{
    $todo = Todo::findOrFail($id);
    $todo->update($request->all());

    return redirect()->route('todos.index');
}


    public function delete($id)
    {
        Todo::findOrFail($id)->delete();
        return redirect()->route('todos.index');
    }
}


