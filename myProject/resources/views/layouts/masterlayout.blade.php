<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Layout- @yield('title', 'web')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="header">
        Code Library
    </div>
    <div class="nav">
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/post">Post</a>
    </div>
    <div class="main">
        <div class="content">
            @hasSection('content')
                @yield('content')
            @else
                <h1>No Content Found</h1>
            @endif
        </div>
        <div class="sidebar">
            @section('sidebar')
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
            @show
        </div>
    </div>
    <div class="footer">
        Code©copyright 2023.
    </div>

    @stack('scripts')
</body>

</html>
