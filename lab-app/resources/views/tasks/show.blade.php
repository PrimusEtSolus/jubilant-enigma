<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $task->title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 600px;
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
        }
        .header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            word-break: break-word;
        }
        .content {
            padding: 2rem;
        }
        .field {
            margin-bottom: 2rem;
        }
        .field-label {
            font-weight: 600;
            color: #4F46E5;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }
        .field-value {
            color: #374151;
            font-size: 1.05rem;
            line-height: 1.6;
            padding: 12px;
            background: #f9fafb;
            border-radius: 8px;
            word-break: break-word;
        }
        .status {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .status-completed {
            background: #d1fae5;
            color: #065f46;
        }
        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }
        .meta-info {
            background: #f3f4f6;
            padding: 12px;
            border-radius: 8px;
            color: #6B7280;
            font-size: 0.85rem;
            margin-bottom: 2rem;
        }
        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn {
            flex: 1;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }
        .btn-edit {
            background: #F59E0B;
            color: white;
        }
        .btn-edit:hover {
            background: #D97706;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(245, 158, 11, 0.3);
        }
        .btn-delete {
            background: #EF4444;
            color: white;
        }
        .btn-delete:hover {
            background: #DC2626;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3);
        }
        .btn-back {
            background: #6B7280;
            color: white;
        }
        .btn-back:hover {
            background: #4B5563;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(107, 114, 128, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>👁️ Task Details</h1>
        </div>

        <div class="content">
            <div class="meta-info">
                Created on {{ $task->created_at->format('F j, Y \\a\\t g:i A') }}
                @if($task->updated_at->ne($task->created_at))
                    | Updated on {{ $task->updated_at->format('F j, Y \\a\\t g:i A') }}
                @endif
            </div>

            <div class="field">
                <div class="field-label">Title</div>
                <div class="field-value">{{ $task->title }}</div>
            </div>

            @if($task->description)
                <div class="field">
                    <div class="field-label">Description</div>
                    <div class="field-value">{{ $task->description }}</div>
                </div>
            @endif

            <div class="field">
                <div class="field-label">Status</div>
                <div>
                    @if($task->is_completed)
                        <span class="status status-completed">✓ Completed</span>
                    @else
                        <span class="status status-pending">⏱ Pending</span>
                    @endif
                </div>
            </div>

            <div class="button-group">
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-edit">✏️ Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="flex: 1;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this task?')" style="width: 100%;">
                        🗑️ Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 2rem;">
        <a href="{{ route('tasks.index') }}" class="btn btn-back" style="display: inline-block; max-width: 200px;">← Back to Tasks</a>
    </div>
</body>
</html>