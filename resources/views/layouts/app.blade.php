<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom GTA 5 inspired styles */
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        body {
            background-color: #1b1b1b;
            color: #fff;
            font-family: 'Verdana', sans-serif;
        }
        .navbar {
            background-color: rgba(51, 51, 51, 0.9); /* Semi-transparent */
        }
        .navbar-brand {
            color: #00ccff;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            margin-left: 20px;
        }
        .nav-link {
            color: #fff;
            font-size: 18px;
            text-transform: uppercase;
        }
        .nav-link:hover {
            color: #00ccff;
        }
        .container {
            margin-top: 100px;
            background-color: rgba(34, 34, 34, 0.8); /* Semi-transparent */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.8);
            z-index: 1;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #00ccff;
            text-transform: uppercase;
        }
        .btn-gta {
            background-color: #00ccff;
            color: #fff;
            font-size: 18px;
            text-transform: uppercase;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            transition: 0.3s;
        }
        .btn-gta:hover {
            background-color: #008fb3;
            transform: scale(1.1);
        }
    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Laravel1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('article') }}">Projects</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>@yield('content-title')</h1>
        @yield('content')        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
