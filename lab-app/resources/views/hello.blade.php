<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes & Navigation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center min-h-screen bg-gradient-to-br from-gray-700 to-gray-900 font-sans">

    <div class="bg-gray-100 p-12 rounded-2xl shadow-2xl text-center max-w-md w-full">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">🎯 Available Routes</h1>
        <p class="text-gray-600 mb-8">Click any button to explore different routes</p>

        <div class="flex flex-col gap-3">
            <a href="/greet/Laravel" class="inline-block bg-gray-700 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-800 hover:-translate-x-1 transition-all duration-300">
                Greet Laravel
            </a>
            <a href="/tasks" class="inline-block bg-gray-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-700 hover:-translate-x-1 transition-all duration-300">
                Tasks CRUD
            </a>
            <a href="/" class="inline-block bg-gray-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-600 hover:-translate-x-1 transition-all duration-300 mt-4">
                Back to Splash
            </a>
        </div>
    </div>

</body>
</html>