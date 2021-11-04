<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/tailwindapp.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">


    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="bg-white">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-16">
                        <div class="flex -ml-16">
                            <a href="/" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                                <img class="h-7 w-7 mr-1.5" src="favicon.ico">
                                <span class="font-bold">GSB</span>
                            </a>
                        </div>

                        @auth
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="/visites" class="navlinks py-5 px-3 text-gray-700 hover:text-gray-900">Visites</a>
                            <a href="/mes-medecins" class="navlinks py-5 px-3 text-gray-700 hover:text-gray-900">Médecins</a>
                        </div>
                        @endauth
                    </div>

                    <div class="hidden md:flex items-center space-x-1">
                    @auth
                        <a href="/logout" class="navlinks py-5 px-3">
                            Déconnexion
                        </a>
                    @else
                        <a href="/login" class="loginbutton py-2 px-3 text-white rounded transition duration-300">
                            Connexion
                        </a>
                    @endauth
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="mobile-menu hidden md:hidden">
                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Features</a>
                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Pricing</a>
            </div>
        </nav>
    </header>
    @if(session()->has('event_success'))
        <div class="succes-alert fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-8 text-lg right-8 p-1.5">
            <p>{!! session('event_success') !!}</p>
        </div>
    @elseif(session()->has('event_fail'))
        <div class="fail-alert fixed bg-red-500 text-white py-2 px-4 rounded-xl bottom-8 text-lg right-8 p-1.5">
            <p>{!! session('event_fail') !!}</p>
        </div>
    @endif
    @yield('content')
</body>
</html>
