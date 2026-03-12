<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
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
            max-width: 500px;
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
        }
        .header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
        }
        .content {
            padding: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
            font-size: 0.95rem;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #4F46E5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }
        textarea {
            resize: vertical;
            min-height: 120px;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-right: 0.75rem;
            cursor: pointer;
        }
        .checkbox-group label {
            margin: 0;
            font-weight: 500;
            display: inline;
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
        .btn-primary {
            background: #4F46E5;
            color: white;
        }
        .btn-primary:hover {
            background: #4338CA;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        .btn-secondary {
            background: #e5e7eb;
            color: #374151;
        }
        .btn-secondary:hover {
            background: #d1d5db;
        }
        .error {
            color: #dc2626;
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }
        .success-message {
            background: #d1fae5;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid #10b981;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>✨ Create New Task</h1>
        </div>

        <div class="content">
            @if ($errors->any())
                <div class="error" style="background: #fee2e2; padding: 12px; border-left: 4px solid #ef4444; border-radius: 6px; margin-bottom: 1rem;">
                    <strong>Please fix the following errors:</strong>
                    <ul style="margin: 0.5rem 0 0 1.5rem;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Task Title *</label>
                    <input type="text" id="title" name="title" placeholder="Enter task title" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Enter task description (optional)">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="is_completed" name="is_completed" value="1">
                    <label for="is_completed">Mark as completed</label>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Create Task</button>
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>