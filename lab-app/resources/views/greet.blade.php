<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center min-h-screen bg-gradient-to-br from-gray-700 to-gray-900 font-sans">

    <div class="bg-gray-100 p-16 rounded-2xl shadow-2xl text-center max-w-md w-full">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">🚀 Laravel App</h1>
        <p class="text-xl text-gray-600 mb-8 font-light">Laravel Application by Istiane</p>

        </p>
        <div class="flex flex-col gap-4">
            <a href="/tasks" class="inline-block bg-gray-700 text-white py-3 px-8 rounded-lg font-semibold hover:bg-gray-800 hover:-translate-y-0.5 hover:shadow-lg transition-all duration-300">
                Go to Tasks Index
            </a>
            <a href="/hello" class="inline-block bg-gray-600 text-white py-3 px-8 rounded-lg font-semibold hover:bg-gray-700 hover:-translate-y-0.5 hover:shadow-lg transition-all duration-300">
                Explore Routes
            </a>
        </div>
    </div>

</body>
</html>