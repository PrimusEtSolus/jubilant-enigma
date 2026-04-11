<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Simple text route required by the lab instructions
Route::get('/hello-laravel', function () {
    return 'Hello, Laravel!';
});

// Splash page (landing page)
Route::get('/', [GreetController::class, 'show']);

// Navigation page with buttons to routes
Route::get('/hello', function () {
    return view('hello');
});

// Route with parameter
Route::get('/greet/{name}', function ($name) {
    return view('greet-name', ['name' => $name]);
});

// Task resource route
use App\Http\Controllers\TaskController;
Route::resource('tasks', TaskController::class);