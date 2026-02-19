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
    $html = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Greet {$name}</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
        <style>
            body { margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f3f4f6; font-family: 'Inter', sans-serif; }
            .card { background: white; padding: 3rem; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: center; max-width: 400px; width: 100%; }
            h1 { font-size: 1.5rem; color: #111; margin: 0 0 1rem 0; }
            p { color: #6B7280; margin-bottom: 2rem; line-height: 1.5; }
            .btn { display: inline-block; background-color: #4F46E5; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; transition: background 0.2s; }
            .btn:hover { background-color: #4338CA; }
            .back-btn { background-color: #6B7280; }
            .back-btn:hover { background-color: #4B5563; }
            .button-group { display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Hello, {$name}!</h1>
            <p>Welcome thus Laravel app.</p>
            <div class="button-group">
                <a href="/" class="btn back-btn">Back to Home</a>
            </div>
        </div>
    </body>
    </html>
    HTML;
    return $html;
});

// About page
Route::get('/about', function () {
    $html = <<<'HTML'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
        <style>
            body { margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f3f4f6; font-family: 'Inter', sans-serif; }
            .card { background: white; padding: 3rem; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: center; max-width: 400px; width: 100%; }
            h1 { font-size: 1.5rem; color: #111; margin: 0 0 1rem 0; }
            p { color: #6B7280; margin-bottom: 2rem; line-height: 1.5; }
            .btn { display: inline-block; background-color: #4F46E5; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; transition: background 0.2s; }
            .btn:hover { background-color: #4338CA; }
            .back-btn { background-color: #6B7280; }
            .back-btn:hover { background-color: #4B5563; }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>About Us</h1>
            <p>This is activity has context of Simple Routing to Views for the CIT18 MASTERY IN WEB TECHNOLOGY subject.</p>
            <a href="/" class="btn back-btn">Back to Home</a>
        </div>
    </body>
    </html>
    HTML;
    return $html;
});

// Contact page
Route::get('/contact', function () {
    $html = <<<'HTML'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
        <style>
            body { margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f3f4f6; font-family: 'Inter', sans-serif; }
            .card { background: white; padding: 3rem; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: center; max-width: 400px; width: 100%; }
            h1 { font-size: 1.5rem; color: #111; margin: 0 0 1rem 0; }
            p { color: #6B7280; margin-bottom: 2rem; line-height: 1.5; }
            .btn { display: inline-block; background-color: #4F46E5; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600; transition: background 0.2s; }
            .btn:hover { background-color: #4338CA; }
            .back-btn { background-color: #6B7280; }
            .back-btn:hover { background-color: #4B5563; }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Contact Us</h1>
            <p>Email: contact@eyooo.com<br>Phone: 09123456789<br>Address: 420  Larabes Street</p>
            <a href="/" class="btn back-btn">Back to Home</a>
        </div>
    </body>
    </html>
    HTML;
    return $html;
});