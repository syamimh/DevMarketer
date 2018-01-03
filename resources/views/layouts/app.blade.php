<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DevMarketer') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar is-transparent has-shadow is-fixed-top" role="navigation" aria-label="dropdown navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}" class="navbar-item">
                        <img src="{{ asset('images/devmarketer-logo.png') }}" alt="DevMarketer Logo" >
                    </a>
                    <div class="navbar-burger burger" data-target="devMarketerNavBar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div id="devMarketerNavBar" class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#" class="navbar-item m-l-10 is-hoverable">Learn</a>
                        <a href="#" class="navbar-item is-hoverable">Discuss</a>
                        <a href="#" class="navbar-item is-hoverable">Share</a>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            @if(Auth::guest())
                                <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                                <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a href="#" class="navbar-link">
                                        Hey, Syamim
                                    </a>
                                    <div class="navbar-dropdown is-boxed is-right">
                                        <a class="navbar-item" href="#">
                                            <span class="icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span> Profile
                                        </a>
                                        <a class="navbar-item" href="#">
                                            <span class="icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span> Notifications
                                        </a>
                                        <a class="navbar-item" href="#">
                                            <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span> Setting
                                        </a>
                                        <hr class="navbar-divider">
                                        <a class="navbar-item" href="#">
                                            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
