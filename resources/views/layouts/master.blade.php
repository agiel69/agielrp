<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Tiket Kereta API</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #f5f6fa;
            color: #333;
        }
        header {
            background-color: #0057a3;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .container {
            padding: 30px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
        }
        .btn {
            background-color: #ff6200;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background-color: #e55a00;
        }
    </style>
</head>
<body>
    <header>
        SELAMAT DATANG DI WEBSITE TIKET KERETA API INDONESIA
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy;2025 | PT Kereta Api Indonesia
    </footer>
</body>
</html>
