<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Oy | @yield('title')</title>
    @vite('resources/css/app.scss')
    @yield('head')
</head>

<body>
    <header>
        <div class="row">
        <div class="col">
            <img src="/logo/Logo light.png" alt="Weather Oy logo" />
        </div>
        <div class="col">
            <nav>
            <ul>
                {{-- @if(Auth::check())

                @else
                    <li><a href="{{ url('login') }}" class="btn secondary">Kirjaudu</a></li>
                @endif --}}

                <li>
                <a class="icon">
                    <i class="fa fa-bars"></i>
                </a>
                </li>
            </ul>
            </nav>
        </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p><small>&copy; Taitaja 2023 & Kokkoniemi Svante 2025</small></p>
    </footer>
</body>
</html>