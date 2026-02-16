<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Inter', sans-serif;
        }

        .splash-container {
            background: white;
            padding: 4rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 2.5rem;
            color: #667eea;
            margin: 0 0 1rem 0;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #6B7280;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        p {
            color: #6B7280;
            margin-bottom: 3rem;
            line-height: 1.8;
            font-size: 1rem;
        }

        .btn {
            display: inline-block;
            background-color: #667eea;
            color: white;
            padding: 14px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .btn:hover {
            background-color: #764ba2;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }
    </style>
</head>
<body>

    <div class="splash-container">
        <h1>🚀 Laravel App</h1>
        <p class="subtitle">Laravel Application by PrimustEtSolus</p>
        <p>
            This is a Laravel learning project demonstrating routing, controllers, and views.
            Explore this application and see fundamentals of Laravel.
        </p>
        <a href="/hello" class="btn">Explore Routes</a>
    </div>

</body>
</html>