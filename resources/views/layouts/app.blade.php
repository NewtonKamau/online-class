<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DevMarket') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="nav has-shadow">
            <div class="container">
                <div>
                    <nav class="nav-lef">
                    <a class="nav-item" href="{{route('home')}}">
                    <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer Logo" />
                        </a>
                        <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                        <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Discuss</a>
                        <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Share</a>


                    </nav>
                </div>
                <div class="nav-right" style="overflow: visible">
                    @if (auth::guest())
                    <a href="#" class="nav-item is-tab">Login</a>
                    <a href="#" class="nav-item is-tab">Join the Community</a>
                    @else
                        <button class="dropdown nav-item  is-tab">
                            Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>

                            <ul class="dropdown-menu">
                                <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i> </span>
                                <li ><a href=""></a> Profile</li>
                                <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i> </span>
                                <li ><a href=""></a>Notification </li>
                                <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i> </span>
                                <li ><a href=""></a>Settings </li>
                                <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i> </span>
                                <li ><a href="separator"></a>Logout </li>
                                <li ><a href=""></a> </li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>
            @yield('content')

    </div>
</body>
</html>
