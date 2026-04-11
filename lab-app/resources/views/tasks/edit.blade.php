<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-serif m-8 bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="max-w-2xl mx-auto bg-gray-900 p-8 rounded-none border-4 border-double border-gray-600 shadow-[0_0_50px_rgba(0,0,0,0.8)] relative">
        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700"></div>
        <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700"></div>
        
        <h1 class="text-3xl font-bold text-gray-100 mb-6 tracking-wide">Edit Task</h1>
        
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block mb-2 font-bold text-gray-300 tracking-wider uppercase">Title *</label>
                <input type="text" id="title" name="title" value="{{ $task->title }}" required class="w-full p-3 border-2 border-gray-600 bg-gray-800 text-gray-100 rounded-none focus:outline-none focus:border-gray-500 focus:shadow-[0_0_10px_rgba(100,100,100,0.5)] transition-all">
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 font-bold text-gray-300 tracking-wider uppercase">Description</label>
                <textarea id="description" name="description" class="w-full p-3 border-2 border-gray-600 bg-gray-800 text-gray-100 rounded-none focus:outline-none focus:border-gray-500 focus:shadow-[0_0_10px_rgba(100,100,100,0.5)] transition-all min-h-[100px]">{{ $task->description }}</textarea>
            </div>
            <div class="mb-6 flex items-center">
                <input type="checkbox" id="is_completed" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }} class="mr-3 w-5 h-5 accent-gray-500">
                <label for="is_completed" class="text-gray-300">Mark as Completed</label>
            </div>
            <div class="flex gap-4 mt-8">
                <button type="submit" class="flex-1 bg-gradient-to-r from-gray-700 to-gray-800 text-gray-100 py-3 px-6 border-2 border-gray-600 font-semibold hover:from-gray-600 hover:to-gray-700 hover:border-gray-500 hover:shadow-[0_0_20px_rgba(100,100,100,0.5)] transition-all duration-300 tracking-wider uppercase">
                    Update Task
                </button>
                <a href="{{ route('tasks.index') }}" class="flex-1 bg-gradient-to-r from-gray-600 to-gray-700 text-gray-100 py-3 px-6 border-2 border-gray-500 font-semibold hover:from-gray-500 hover:to-gray-600 hover:border-gray-400 hover:shadow-[0_0_20px_rgba(100,100,100,0.5)] transition-all duration-300 tracking-wider uppercase text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</body>
</html>