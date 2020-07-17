<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <script src="{{ mix('Frontend/js/app.js') }}" defer></script>


    <link href="{{ mix('Frontend/css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.list')}}">List <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.park')}}">Park Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.unpark')}}">Unpark Car</a>
                    </li>
                </ul>

            </div>
        </nav>
        <main role="main" >
            <div class="row">
                @yield('content')
            </div>

        </main>
    </div>
</div>
</body>
</html>


