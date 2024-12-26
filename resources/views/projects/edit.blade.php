@extends('dashboard.main')

@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Project</h1>

<form action="{{ route('projects.update', $project->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Project Name</label>
        <input type="text" id="name" name="name" value="{{ $project->name }}" required 
               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea id="description" name="description" rows="4" 
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $project->description }}</textarea>
    </div>

    <div class="mb-4">
        <label for="deadline" class="block text-sm font-medium text-gray-700 mb-1">Deadline</label>
        <input type="date" id="deadline" name="deadline" value="{{ $project->deadline }}" 
               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
        <select id="status" name="status" required 
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <option value="pending" {{ $project->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="in_progress" {{ $project->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
    </div>

    <div class="flex justify-end mt-6">
        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Update Project</button>
    </div>
</form>
@endsection
