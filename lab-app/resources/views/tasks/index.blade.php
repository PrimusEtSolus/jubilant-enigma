<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans m-8 bg-gradient-to-br from-gray-700 to-gray-900">
    <div class="max-w-4xl mx-auto bg-gray-100 p-8 rounded-lg">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Tasks</h1>
            <a href="{{ route('tasks.create') }}" class="bg-gray-700 text-white px-5 py-2 rounded hover:bg-gray-800 transition">+ New Task</a>
        </div>

        @if(session('success'))
            <div class="text-green-600 bg-green-100 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        @if(count($tasks) > 0)
            <table class="w-full border-collapse mt-6">
                <thead>
                    <tr>
                        <th class="bg-gray-700 text-white p-3 text-left">Title</th>
                        <th class="bg-gray-700 text-white p-3 text-left">Description</th>
                        <th class="bg-gray-700 text-white p-3 text-left">Status</th>
                        <th class="bg-gray-700 text-white p-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr class="hover:bg-gray-200">
                            <td class="p-3 border-b border-gray-300"><strong>{{ $task->title }}</strong></td>
                            <td class="p-3 border-b border-gray-300">{{ substr($task->description, 0, 50) }}</td>
                            <td class="p-3 border-b border-gray-300">{{ $task->is_completed ? '✓ Done' : '○ Pending' }}</td>
                            <td class="p-3 border-b border-gray-300">
                                <a href="{{ route('tasks.show', $task->id) }}" class="text-gray-700 hover:underline mr-2">View</a>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="text-gray-700 hover:underline mr-2">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-gray-600 text-white px-3 py-1 rounded hover:bg-gray-800 transition" onclick="return confirm('Delete this task?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center text-gray-500 mt-8">No tasks yet. <a href="{{ route('tasks.create') }}" class="text-gray-700 hover:underline">Create one</a></p>
        @endif

        <p class="mt-8"><a href="/" class="text-gray-700 hover:underline">← Back to Home</a></p>
    </div>
</body>
</html>