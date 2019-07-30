<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blue-Library') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#003366; ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('images/bluecrest2.png')}}" alt="" style="height:60px;">
                   <span style="color:white;"> {{ config('app.name', 'Laravel') }} </span>
                   
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                           
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                     

                        @auth
                            @if(Auth::user()->admin==1)
                            <li class="nav-item active" >
                                    <a class="nav-link" href="{{url('home')}}"><h5 style="color:white;">Home</h5><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active" >
                                    <a class="nav-link" href="{{url('dash')}}"><h5 style="color:white;">Dashboard</h5><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active" >
                                    <a class="nav-link" href="{{url('userprofile')}}"><h5 style="color:white;">Profile</h5><span class="sr-only">(current)</span></a>
                        </li>
                           
                            @else
                            <li class="nav-item active" >
                                    <a class="nav-link" href="{{url('home')}}"><h5 style="color:white;">Home</h5><span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active" >
                                    <a class="nav-link" href="{{url('userprofile')}}"><h5 style="color:white;">Profile</h5><span class="sr-only">(current)</span></a>
                        </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span style="color:white;"> {{ Auth::user()->name }}</span> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endauth

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@include('includes.footer')
</html>
