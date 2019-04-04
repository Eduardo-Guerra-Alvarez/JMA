<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JMA') }}</title>

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
        <nav class="navbar navbar-expand-md bg-faded">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://ii.ct-stc.com/2/logos/empresas/2018/01/05/a1eb73eadb7d454a959c155550642thumbnail.jpeg" width="150px" height="50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{action('PaginaController@info')}}" class="nav-link">Información</a> <!--Forma de crear un enlace-->
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contacto')}}" class="nav-link">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('obras.index')}}" class="nav-link">Obras</a><!--Forma facil de crear un enlace-->
                        </li>
                        <li class="nav-item">
                            <a href="{{route('trabajadores.index')}}" class="nav-link"> Trabajadores </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('materiales.index')}}" class="nav-link"> Materiales </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('departamentos.index')}}" class="nav-link"> Departamentos </a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarte') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
