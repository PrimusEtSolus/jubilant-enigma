<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet {{ $name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black font-serif">

    <div class="bg-gray-900 p-12 rounded-none border-4 border-double border-gray-600 shadow-[0_0_50px_rgba(0,0,0,0.8)] text-center max-w-md w-full relative">
        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700"></div>
        <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700"></div>
        
        <h1 class="text-4xl font-bold text-gray-100 mb-4 tracking-wide">Hello, {{ $name }}!</h1>
        <p class="text-gray-400 mb-8 italic">Welcome.</p>

        <div class="flex flex-col gap-4">
            <a href="/" class="inline-block bg-gradient-to-r from-gray-600 to-gray-700 text-gray-100 py-4 px-8 border-2 border-gray-500 font-semibold hover:from-gray-500 hover:to-gray-600 hover:border-gray-400 hover:shadow-[0_0_20px_rgba(100,100,100,0.5)] transition-all duration-300 tracking-wider uppercase">
                Back to Home
            </a>
        </div>
    </div>

</body>
</html>
