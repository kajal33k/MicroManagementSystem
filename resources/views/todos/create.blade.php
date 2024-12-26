@extends('dashboard.main')

@section('content')


<div class="max-w-3xl mx-auto p-8">
    <h1 class="text-3xl font-semibold mb-4">Create New To-Do</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full p-2 border rounded"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>



@endsection