<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <title>JMA Mantenimiento & Construcción</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-faded">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://ii.ct-stc.com/2/logos/empresas/2018/01/05/a1eb73eadb7d454a959c155550642thumbnail.jpeg" width="150px" height="50px">
                </a>
                <button class="navbar-toggler bg-faded" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="fa fa-fw fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{action('PaginaController@info')}}" class="nav-link">Información</a>                        
                        </li>
                        <li class="nav-item">
                            <a href="{{route('equipo')}}" class="nav-link">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contacto')}}" class="nav-link">Contacto</a>
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

                    <ul class="navbar-nav ml-auto">
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

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
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
        <div class="content" >
            <div class="esp">
                
            </div>
            <div class="title">
                JMA
            </div>
            <div class="title2 m-b-md">
                Mantenimiento & Construcción
            </div>
        </div>
        <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Casa</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content" >
                <div class="title">
                    JMA
                </div>
                <div class="title2 m-b-md">
                    Mantenimiento & Construcción
                </div>
                
                
                <div class="links">
                    <a href="info">Información</a>
                    <a href="contacto">Contactos</a>
                    <a href="{{ route('obras.index')}}">Obras</a>
                    <a href="https://github.com/Eduardo-Guerra-Alvarez/JMA">GitHub</a>
                </div>
            </div>
        </div>
    -->
    </body>
</html>
