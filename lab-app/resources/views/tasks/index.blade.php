<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background: #f5f5f5; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 1.5rem; }
        th { background: #4F46E5; color: white; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #ddd; }
        tr:hover { background: #f9f9f9; }
        a { color: #4F46E5; text-decoration: none; margin-right: 10px; }
        a:hover { text-decoration: underline; }
        .btn { background: #4F46E5; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .btn:hover { background: #4338CA; }
        .btn-danger { background: #EF4444; }
        .btn-danger:hover { background: #DC2626; }
        .success { color: #10B981; background: #d1fae5; padding: 10px; border-radius: 4px; margin-bottom: 1rem; }
        .header { display: flex; justify-content: space-between; align-items: center; }
        .btn-new { display: inline-block; background: #4F46E5; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; }
        .btn-new:hover { background: #4338CA; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Tasks</h1>
            <a href="{{ route('tasks.create') }}" class="btn-new">+ New Task</a>
        </div>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if(count($tasks) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td><strong>{{ $task->title }}</strong></td>
                            <td>{{ substr($task->description, 0, 50) }}</td>
                            <td>{{ $task->is_completed ? '✓ Done' : '○ Pending' }}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}">View</a>
                                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this task?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="text-align: center; color: #999; margin-top: 2rem;">No tasks yet. <a href="{{ route('tasks.create') }}">Create one</a></p>
        @endif

        <p style="margin-top: 2rem;"><a href="/hello">← Back to Home</a></p>
    </div>
</body>
</html>