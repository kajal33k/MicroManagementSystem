@extends('dashboard.main')

@section('content')
<h1 class="text-xl mb-4">Create Project</h1>

<form action="{{ route('projects.store') }}" method="POST" class="bg-white p-4 rounded shadow">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-sm">Name</label>
        <input type="text" name="name" id="name" class="w-full border rounded p-2">
    </div>
    <div class="mb-4">
        <label for="description" class="block text-sm">Description</label>
        <textarea name="description" id="description" class="w-full border rounded p-2"></textarea>
    </div>
    <div class="mb-4">
        <label for="deadline" class="block text-sm">Deadline</label>
        <input type="date" name="deadline" id="deadline" class="w-full border rounded p-2">
    </div>
    <div class="mb-4">
        <label for="status" class="block text-sm">Status</label>
        <select name="status" id="status" class="w-full border rounded p-2">
            <option value="pending">Pending</option>
            <option value="in_progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">submit</button>
</form>
@endsection
