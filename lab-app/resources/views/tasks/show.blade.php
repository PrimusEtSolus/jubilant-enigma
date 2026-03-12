<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $task->title }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px; }
        h1 { color: #333; }
        .field { margin-bottom: 1.5rem; }
        .field-label { font-weight: bold; color: #4F46E5; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem; }
        .field-value { background: #f9f9f9; padding: 12px; border-radius: 4px; line-height: 1.6; }
        .status { display: inline-block; padding: 6px 12px; border-radius: 20px; font-size: 0.9rem; font-weight: bold; }
        .status-completed { background: #d1fae5; color: #065f46; }
        .status-pending { background: #fef3c7; color: #92400e; }
        .button-group { display: flex; gap: 10px; margin-top: 2rem; }
        .btn { padding: 10px 20px; background: #4F46E5; color: white; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; text-align: center; flex: 1; }
        .btn:hover { background: #4338CA; }
        .btn-danger { background: #EF4444; }
        .btn-danger:hover { background: #DC2626; }
        .back { text-align: center; margin-top: 2rem; }
        .back a { color: #4F46E5; text-decoration: none; }
        .back a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $task->title }}</h1>
        <div class="field">
            <div class="field-label">Description</div>
            <div class="field-value">{{ $task->description ?: 'No description' }}</div>
        </div>
        <div class="field">
            <div class="field-label">Status</div>
            <div>
                @if($task->is_completed)
                    <span class="status status-completed">✓ Completed</span>
                @else
                    <span class="status status-pending">○ Pending</span>
                @endif
            </div>
        </div>
        <div class="button-group">
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this task?')" style="width: 100%;">Delete</button>
            </form>
        </div>
    </div>
    <div class="back">
        <a href="{{ route('tasks.index') }}">← Back to Tasks</a>
    </div>
</body>
</html>