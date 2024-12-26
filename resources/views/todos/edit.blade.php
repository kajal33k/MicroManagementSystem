@extends('dashboard.main')

@section('content')


<div class="max-w-3xl mx-auto p-8">
    <h1 class="text-3xl font-semibold mb-4">Edit To-Do</h1>

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ $todo->title }}" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full p-2 border rounded">{{ $todo->description }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>



@endsection