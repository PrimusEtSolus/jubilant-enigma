<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 2rem;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            font-size: 2rem;
            font-weight: 700;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #4F46E5;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            font-size: 0.95rem;
        }
        .btn:hover {
            background: #4338CA;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        .btn-view {
            background: #10B981;
            padding: 8px 12px;
            font-size: 0.85rem;
        }
        .btn-view:hover {
            background: #059669;
        }
        .btn-edit {
            background: #F59E0B;
            padding: 8px 12px;
            font-size: 0.85rem;
        }
        .btn-edit:hover {
            background: #D97706;
        }
        .btn-delete {
            background: #EF4444;
            padding: 8px 12px;
            font-size: 0.85rem;
        }
        .btn-delete:hover {
            background: #DC2626;
        }
        .btn-back {
            background: #6B7280;
            padding: 8px 16px;
            font-size: 0.9rem;
        }
        .btn-back:hover {
            background: #4B5563;
        }
        .content {
            padding: 2rem;
        }
        .table-wrapper {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }
        thead {
            background: #f3f4f6;
        }
        th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            color: #374151;
            border-bottom: 2px solid #e5e7eb;
        }
        td {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
            color: #6B7280;
        }
        tbody tr:hover {
            background: #f9fafb;
        }
        .status-completed {
            display: inline-block;
            padding: 4px 12px;
            background: #d1fae5;
            color: #065f46;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .status-pending {
            display: inline-block;
            padding: 4px 12px;
            background: #fef3c7;
            color: #92400e;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }
        .delete-form {
            display: inline;
        }
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            color: #9CA3AF;
        }
        .empty-state svg {
            width: 64px;
            height: 64px;
            margin-bottom: 1rem;
            opacity: 0.5;
        }
        .empty-state p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }
        .footer {
            padding: 2rem;
            border-top: 1px solid #e5e7eb;
            text-align: center;
        }
        .footer a {
            color: #4F46E5;
            text-decoration: none;
            font-weight: 600;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📋 Task Management</h1>
            <a href="{{ route('tasks.create') }}" class="btn">+ New Task</a>
        </div>

        <div class="content">
            @if($tasks->count() > 0)
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td><strong>{{ $task->title }}</strong></td>
                                    <td>{{ Str::limit($task->description, 50) }}</td>
                                    <td>
                                        @if($task->is_completed)
                                            <span class="status-completed">✓ Completed</span>
                                        @else
                                            <span class="status-pending">⏱ Pending</span>
                                        @endif
                                    </td>
                                    <td>{{ $task->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="{{ route('tasks.show', $task) }}" class="btn btn-view">View</a>
                                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-edit">Edit</a>
                                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="empty-state">
                    <p>No tasks found. Create your first task to get started!</p>
                    <a href="{{ route('tasks.create') }}" class="btn">Create First Task</a>
                </div>
            @endif
        </div>

        <div class="footer">
            <a href="/hello" class="btn-back">← Back to Navigation</a>
        </div>
    </div>
</body>
</html>