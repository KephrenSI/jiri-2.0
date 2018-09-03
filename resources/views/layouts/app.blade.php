<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jiri') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>

    <!-- Materialize -->
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        header, footer {
            padding-left: 300px;
        }
        @if(Auth::check())
        main {
            padding-left: 300px;
        }
        @else
        main {
            padding-left: 0;
        }
        @endif

        @media only screen and (max-width : 992px) {
            header, footer {
                padding-left: 300px;
            }
        }
    </style>

</head>
<body>

    @if(Auth::check())
        <header>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{--{{ config('app.name', 'Jiri') }}--}}
                        <img class="circle" src="{{URL::asset('assets/img/Juventus-logo-2017.png')}}" width="100">
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
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Déconnexion') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="navbar-header fixed">

            <h2 class="hidden">Menu principal</h2>
            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="{{URL::asset('assets/img/john-schnobrich-520023-unsplash.jpg')}}" alt="profile Pic" width="325">
                        </div>
                        <br>
                        <br>
                        <div>
                            <p class="white-text name">{{ Auth::user()->name }}</p>
                            <p class="white-text email">{{ Auth::user()->email }}</p>

                        </div>
                    </div>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        @if( Auth::user()->is_admin)
                            <li>
                                <a class="collapsible-header waves-effect waves-light">
                                    <i class="material-icons left">people</i>
                                    <span>Élèves</span>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="{{ url('/students/create') }}">Créer un élève</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/students/index') }}">Liste des élèves</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect waves-light">
                                    <i class="material-icons left">laptop_mac</i>
                                    <span>Projets</span>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="{{ url('/projects/create') }}">Créer un projet</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/projects/index') }}">Liste des projets</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect waves-light">
                                    <i class="material-icons left">supervisor_account</i>
                                    <span>Utilisateurs</span>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="{{ url('/users/create') }}">Créer un utilisateur</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/users/index') }}">Liste des utilisateurs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                        <li>
                            <a class="collapsible-header waves-effect waves-light">
                                <i class="material-icons left">library_books</i>
                                <span>Évènements</span>
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    @if( Auth::user()->is_admin)
                                        <li>
                                            <a href="{{ url('/events/create') }}">Créer un évènement</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{ url('/events/index') }}">
                                            @if( Auth::user()->is_admin)
                                                Liste de mes évènements
                                            @else
                                                Liste des évènements
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    @endif
    <main class="py-4">
        @yield('content')
    </main>

    <script src="{{URL::asset('assets/js/index.js')}}"></script>
</body>
</html>
