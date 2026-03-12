<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 1.5rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; color: #333; }
        input[type="text"], textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; }
        input[type="text"]:focus, textarea:focus { outline: none; border-color: #4F46E5; box-shadow: 0 0 5px rgba(79, 70, 229, 0.3); }
        textarea { min-height: 100px; resize: vertical; }
        .checkbox-group { display: flex; align-items: center; } 
        input[type="checkbox"] { margin-right: 10px; width: auto; }
        .button-group { display: flex; gap: 10px; margin-top: 2rem; }
        .btn { padding: 10px 20px; background: #4F46E5; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; }
        .btn:hover { background: #4338CA; }
        .btn-cancel { background: #6B7280; text-decoration: none; text-align: center; }
        .btn-cancel:hover { background: #4B5563; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create New Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" id="title" name="title" placeholder="Enter task title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter task description">{{ old('description') }}</textarea>
            </div>
            <div class="form-group checkbox-group">
                <input type="checkbox" id="is_completed" name="is_completed" value="1">
                <label for="is_completed" style="margin: 0;">Mark as Completed</label>
            </div>
            <div class="button-group">
                <button type="submit" class="btn">Create Task</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
