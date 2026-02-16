<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes & Navigation</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6;
            font-family: 'Inter', sans-serif;
        }

        .container {
            background: white;
            padding: 3rem;
            border-radius: 16px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 1.8rem;
            color: #111;
            margin: 0 0 1rem 0;
        }

        .subtitle {
            color: #6B7280;
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 2rem;
        }

        .btn {
            display: block;
            padding: 14px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            font-size: 1rem;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: #4F46E5;
            color: white;
        }

        .btn-primary:hover {
            background-color: #4338CA;
            transform: translateX(4px);
        }

        .btn-secondary {
            background-color: #10B981;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #059669;
            transform: translateX(4px);
        }

        .btn-tertiary {
            background-color: #F59E0B;
            color: white;
        }

        .btn-tertiary:hover {
            background-color: #D97706;
            transform: translateX(4px);
        }

        .btn-back {
            background-color: #6B7280;
            color: white;
            margin-top: 1rem;
        }

        .btn-back:hover {
            background-color: #4B5563;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🎯 Available Routes</h1>
        <p class="subtitle">Click any button to explore different routes</p>
        
        <div class="btn-group">
            <a href="/greet/Laravel" class="btn btn-primary">Greet Laravel</a>
            <a href="/greet/Developer" class="btn btn-primary">Greet Developer</a>
            <a href="/about" class="btn btn-secondary">About Page</a>
            <a href="/contact" class="btn btn-tertiary">Contact Page</a>
            <a href="/" class="btn btn-back">Back to Splash</a>
        </div>
    </div>

</body>
</html>