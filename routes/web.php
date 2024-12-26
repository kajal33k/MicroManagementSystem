<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TodoController;

use App\Http\Controllers\TaskController;

// Dashboard route
// Route::get('/dashboard', [HomeController::class, 'index'])->name('main.dashboard');

// main page
Route::get('/content', [MainController::class, 'content'])->name('mainpage.content');
Route::get('/dashboard', [MainController::class, 'das'])->name('das');
Route::get('/test', [MainController::class, 'test'])->name('testig');


// PROJECT
// Route::get('/project', [ProjectController::class, 'index'])->name('index');


// PROJECT STSTUS
Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/project', [ProjectController::class, 'index'])->name('index');
    Route::get('/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/store', [ProjectController::class, 'store'])->name('store');
    Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('edit');
    Route::put('/update/{project}', [ProjectController::class, 'update'])->name('update'); // Changed to PUT for update
    Route::get('/delete/{project}', [ProjectController::class, 'delete'])->name('delete'); 
});




// T do


// Route::resource('todos', TodoController::class);
// TODO :::::
Route::prefix('todos')->name('todos.')->group(function () {
    Route::get('/todos', [TodoController::class, 'index'])->name('index');
    Route::get('/create', [TodoController::class, 'create'])->name('create');
    Route::post('/store', [TodoController::class, 'store'])->name('store');
    Route::get('/edit/{todos}', [TodoController::class, 'edit'])->name('edit');
    Route::put('/update/{todos}', [TodoController::class, 'update'])->name('update'); // Changed to PUT for update
    Route::get('/delete/{todos}', [TodoController::class, 'delete'])->name('delete'); 
});