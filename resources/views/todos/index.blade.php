@extends('dashboard.main')

@section('content')


<div class="max-w-3xl mx-auto p-8">
    <h1 class="text-3xl font-semibold mb-4">To-Do List</h1>

    <a href="{{ route('todos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New Task</a>

    <table class="min-w-full bg-white shadow-md rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Description</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $todo->title }}</td>
                    <td class="py-2 px-4 border-b">{{ $todo->description }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('todos.edit', $todo->id) }}" class="text-blue-500">Edit</a>
                        <a href="{{ route('todos.delete', $todo->id) }}" class="text-red-500">Delete</a>
                       
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection