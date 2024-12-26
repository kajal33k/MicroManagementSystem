@extends('dashboard.main')

@section('content')
<div class="mb-4">
    <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Project</a>
</div>

<table class="table-auto w-full bg-white rounded shadow">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td class="border px-4 py-2">{{ $project->name }}</td>
            <td class="border px-4 py-2">{{ ucfirst($project->status) }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('projects.edit', $project) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                <a href="{{ route('projects.delete', $project) }}" class="bg-red-500 text-white px-3 py-1 rounded">Delete</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
