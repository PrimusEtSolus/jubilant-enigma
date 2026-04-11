<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $task->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-serif m-8 bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="max-w-2xl mx-auto bg-gray-900 p-8 rounded-none border-4 border-double border-gray-600 shadow-[0_0_50px_rgba(0,0,0,0.8)] relative">
        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700"></div>
        <div class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700"></div>
        
        <h1 class="text-3xl font-bold text-gray-100 mb-6 tracking-wide">{{ $task->title }}</h1>
        
        <div class="mb-6">
            <div class="font-bold text-gray-300 tracking-wider uppercase mb-2">Description</div>
            <div class="bg-gray-800 p-4 border-2 border-gray-600 text-gray-100 leading-relaxed">{{ $task->description ?: 'No description' }}</div>
        </div>
        
        <div class="mb-6">
            <div class="font-bold text-gray-300 tracking-wider uppercase mb-2">Status</div>
            <div>
                @if($task->is_completed)
                    <span class="inline-block px-4 py-2 rounded-lg font-bold bg-green-900 text-green-100 border-2 border-green-700">✓ Completed</span>
                @else
                    <span class="inline-block px-4 py-2 rounded-lg font-bold bg-yellow-900 text-yellow-100 border-2 border-yellow-700">○ Pending</span>
                @endif
            </div>
        </div>
        
        <div class="flex gap-4 mt-8">
            <a href="{{ route('tasks.edit', $task->id) }}" class="flex-1 bg-gradient-to-r from-gray-700 to-gray-800 text-gray-100 py-3 px-6 border-2 border-gray-600 font-semibold hover:from-gray-600 hover:to-gray-700 hover:border-gray-500 hover:shadow-[0_0_20px_rgba(100,100,100,0.5)] transition-all duration-300 tracking-wider uppercase text-center">
                Edit
            </a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full bg-gradient-to-r from-red-900 to-red-800 text-red-100 py-3 px-6 border-2 border-red-700 font-semibold hover:from-red-800 hover:to-red-700 hover:border-red-600 hover:shadow-[0_0_20px_rgba(200,100,100,0.5)] transition-all duration-300 tracking-wider uppercase" onclick="return confirm('Delete this task?')">
                    Delete
                </button>
            </form>
        </div>
    </div>
    
    <div class="text-center mt-8">
        <a href="{{ route('tasks.index') }}" class="text-gray-400 hover:text-gray-200 hover:underline tracking-wider uppercase">← Back to Tasks</a>
    </div>
</body>
</html>