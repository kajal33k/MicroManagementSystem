
@extends('dashboard.main')
@section('content')
<div class="flex justify-between items-center mb-8">
    <h1 class="text-2xl font-bold">Micro Management System</h1>
    <select class="border rounded-md px-4 py-2">
        <option>Select Project</option>
    </select>
</div>

<!-- Grid Layout -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Project Selection -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Project Selection</h2>
        <p class="text-gray-600 mb-4">Choose the project from those assigned.</p>
        <p class="text-gray-600 mb-4">Destination: Operator/Client.</p>
        <button class="bg-emerald-500 text-white px-4 py-2 rounded">Project</button>
    </div>

    <!-- Urgent Alerts -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Urgent Alerts</h2>
        <div class="space-y-4">
            <div class="bg-red-100 p-4 rounded">
                <p class="text-red-700">Urgent task: Upload document by 3 PM</p>
            </div>
            <div class="bg-red-100 p-4 rounded">
                <p class="text-red-700">Client request: Respond to email ASAP</p>
            </div>
        </div>
    </div>

    <!-- Client Communications -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Client Communications</h2>
        <div class="space-y-4">
            <div class="bg-blue-100 p-4 rounded">
                <p class="text-blue-700">Client wants an update on project status.</p>
            </div>
            <div class="bg-blue-100 p-4 rounded">
                <p class="text-blue-700">Request from client to change project direction.</p>
            </div>
        </div>
    </div>

    <!-- Requests to Client -->
    <div class="bg-white rounded-lg shadow p-6 col-span-1 md:col-span-2">
        <h2 class="text-xl font-semibold mb-4">Requests to Client</h2>
        <div class="space-y-2">
            <div class="p-4 bg-gray-50 rounded">
                <p>"Upload the logo."</p>
            </div>
            <div class="p-4 bg-gray-50 rounded">
                <p>"Provide the content for the home page."</p>
            </div>
        </div>
    </div>

    <!-- Daily Update -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Daily Update</h2>
        <p class="text-gray-600 mb-4">You have not sent your update for today! 😊</p>
        <p class="font-semibold">Deadline: 7:00 PM - 8:00 PM. Send your daily update.</p>
    </div>
</div>

<!-- Project Progress -->
<div class="bg-white rounded-lg shadow p-6 mt-6">
    <h2 class="text-xl font-semibold mb-4">Project Progress</h2>
    <div class="w-full bg-gray-200 rounded-full h-4">
        <div class="bg-blue-600 h-4 rounded-full" style="width: 75%"></div>
    </div>
    <p class="mt-2 text-gray-600">Completion: 75% complete</p>
</div>

@endsection