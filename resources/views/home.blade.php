@extends('layouts.app')
@section('libreria')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
<nav class="navbar">
    <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
        <div class="menu">
            <a href="{{url('/')}}" class="nav_link_resp">INICIO</a>
            <a href="#Inicio" class="nav_link_resp">INFORMACION DEL JUEGO</a>
            <a href="{{url('campeones')}}" class="nav_link_resp">CAMPEONES</a>
            <a href="{{url('historias')}}" class="nav_link_resp">NOTICIAS</a>
            <a href="{{url('notas')}}" class="nav_link_resp"> NOTAS DE VERSIÓN</a>
            <a href="#Gameplay" class="nav_link_resp">DESCUBRIR</a>
            <a href="#Gallery" class="nav_link_resp">INICIAR SESIÓN</a>
            <a href="#Networks" class="nav_link_resp">JUGAR AHORA</a>
        </div>
</nav>
<header class="header menu_nav">
    <div class="nav-left">
        <div class="riot">
            <a href="{{url('/')}}">
                <div class="riot-img">
                    <svg class="svg-riot" viewBox="0 0 587.93 165"><path d="M98.77.33L0 46.07l24.61 93.66 18.73-2.3-5.15-58.89 6.15-2.74L54.96 136l32.01-3.93-5.69-65 6.09-2.71 11.68 66.23 32.38-3.98-6.23-71.25 6.16-2.74 12.77 72.43 32.01-3.93V19.71L98.77.33zm2.32 142.05l1.63 9.22 73.42 12.24v-30.68l-75.01 9.22h-.04zm144.49-19.22v12.63h15.57a14.84 14.84 0 01-1.92 7.31 13 13 0 01-5.6 5.11 20 20 0 01-8.9 1.8 17.53 17.53 0 01-10-2.8 17.87 17.87 0 01-6.44-8.14 33.06 33.06 0 01-2.27-12.93 31.81 31.81 0 012.32-12.81 18.14 18.14 0 016.5-8 17.27 17.27 0 019.82-2.78 19.31 19.31 0 015.36.71 14.15 14.15 0 014.33 2.09 12.92 12.92 0 013.18 3.29 15.61 15.61 0 012 4.44h17.27a27.22 27.22 0 00-3.46-10.28 28.84 28.84 0 00-7.05-8.1 32.6 32.6 0 00-9.91-5.29 37.91 37.91 0 00-12.06-1.86 37.32 37.32 0 00-14 2.6 32.6 32.6 0 00-11.36 7.61 35 35 0 00-7.61 12.21 46.15 46.15 0 00-2.73 16.44q0 11.94 4.54 20.59a32.4 32.4 0 0012.69 13.27 39.84 39.84 0 0035.84.84 28.39 28.39 0 0011.67-11q4.25-7.19 4.24-17.2v-9.76zm215.03 40.81V88.53h51.67v13.96h-34.62v16.76h27.99v13.96h-27.99v16.8h34.7v13.96h-51.75zm101.83-53.3a9 9 0 00-3.54-6.64c-2.09-1.59-5-2.38-8.69-2.38a16.63 16.63 0 00-6.26 1 8.62 8.62 0 00-3.83 2.78 6.74 6.74 0 00-1.33 4 6.2 6.2 0 00.79 3.29 7.27 7.27 0 002.4 2.45 16.54 16.54 0 003.7 1.79 40.14 40.14 0 004.64 1.31l6.63 1.54a47.19 47.19 0 019.45 3.08 27.46 27.46 0 017.2 4.68 18.84 18.84 0 014.58 6.39 20.37 20.37 0 011.61 8.29 20.65 20.65 0 01-3.54 12.11 22.56 22.56 0 01-10.15 7.85 41.31 41.31 0 01-15.93 2.76 42.69 42.69 0 01-16.17-2.81 23.22 23.22 0 01-10.72-8.48q-3.83-5.66-4-14.12h16.43a10.68 10.68 0 007.05 9.94 19.37 19.37 0 007.24 1.26 18.44 18.44 0 006.66-1.09 10 10 0 004.33-3 7.22 7.22 0 001.57-4.48 6.16 6.16 0 00-1.42-4 10.86 10.86 0 00-4.14-2.81 42.07 42.07 0 00-6.89-2.14l-8.07-1.95q-9.65-2.3-15.23-7.26t-5.54-13.44a19.86 19.86 0 013.72-12.12 24.74 24.74 0 0110.33-8.11 36.74 36.74 0 0115-2.91 35.62 35.62 0 0114.92 2.91 23.43 23.43 0 019.91 8.14 21.54 21.54 0 013.6 12.12zm-113.99 53.3h-16.87v-57.35l-1.73-.02-17.04 57.37h-16.86l-16.58-57.37-2.15.02v57.35h-16.87V88.53h28.67l14.48 50.56h1.75l14.48-50.56h28.72v75.44zm-114.66 0h18.27l-25.33-75.43h-23.15l-25.37 75.43h18.3l4.93-16.54h27.42zm-28.43-29.7l8.22-27.65h3.1l8.26 27.65zm278.58-37.76a4 4 0 01-3.67-2.44 4 4 0 010-3.1 4 4 0 01.85-1.27 4.25 4.25 0 011.27-.86 4.15 4.15 0 013.1 0 4.13 4.13 0 011.27.86 4.08 4.08 0 01.86 1.27 4 4 0 010 3.1 4.08 4.08 0 01-.86 1.27 4 4 0 01-1.27.86 4 4 0 01-1.55.31zm0-1.09a2.84 2.84 0 001.47-.39 2.94 2.94 0 001.05-1 2.93 2.93 0 000-2.92 3 3 0 00-1.06-1 2.93 2.93 0 00-2.92 0 3 3 0 00-1 1 2.86 2.86 0 000 2.92 3 3 0 001 1 2.83 2.83 0 001.46.39zm-1.46-1.15V90.6h1.78a1.52 1.52 0 01.69.15 1.13 1.13 0 01.47.42 1.24 1.24 0 01.17.66 1.16 1.16 0 01-.18.66 1 1 0 01-.48.41 1.56 1.56 0 01-.7.14h-1.2v-.72h1a.52.52 0 00.36-.12.5.5 0 00.14-.37.47.47 0 00-.14-.37.52.52 0 00-.36-.12h-.55v2.93zm2.39-1.68l.82 1.68h-1.11l-.75-1.68zM282.41 1.03h17.05v75.44h-17.05zm98.02 37.72q0 12.42-4.71 21a32.67 32.67 0 01-12.79 13.17 38.57 38.57 0 01-36.31 0 32.75 32.75 0 01-12.79-13.2q-4.71-8.66-4.71-21t4.71-21.05a32.67 32.67 0 0112.75-13.14 38.65 38.65 0 0136.31 0 32.67 32.67 0 0112.79 13.17q4.71 8.64 4.71 21.05m-17.35 0a33.35 33.35 0 00-2.23-13 17.47 17.47 0 00-6.33-8 18.57 18.57 0 00-19.45 0 17.57 17.57 0 00-6.35 8 38.59 38.59 0 000 26 17.49 17.49 0 006.35 8 18.57 18.57 0 0019.45 0 17.39 17.39 0 006.33-8 33.4 33.4 0 002.23-13M246.58 50.17l8.76 26.3h18.71l-9.74-28.33h-13.23l-.79-2.44c2.52-.49 6.83-1.25 10.65-3.85a20 20 0 008.75-16.39 24.15 24.15 0 00-3.26-12.75 21.9 21.9 0 00-9.36-8.64 32.56 32.56 0 00-14.64-3H212v75.4h17.06v-26.3zm-.32-15.61a19.35 19.35 0 01-7.26 1.18h-9.94V14.88h9.91a18.68 18.68 0 017.25 1.24 9.12 9.12 0 014.4 3.7 10 10 0 011.5 5.64 9.65 9.65 0 01-1.48 5.55 8.86 8.86 0 01-4.38 3.55M382.04 1.03v14h29.3l.8 2.45c-2.48.48-6.67 1.22-10.43 3.7v55.31h16.87v-61.5h19.62v-14z"></path></svg>
                </div>
                <div class="flecha">
                    <svg class="svg-flecha" viewBox="0 0 8 5"><path d="M.707 1.707l2.586 2.586a1 1 0 001.414 0l2.586-2.586C7.923 1.077 7.477 0 6.586 0H1.414C.524 0 .077 1.077.707 1.707z"></path></svg>
                </div>
            </a>
        </div>
    </div>
    <div class="nav-center">
        <div class="nav-logo">
            <div class="logo"><img src="{{asset('storage/img/logo.png')}}" alt=""></div>
        </div>

        <nav class="nav">
            <input type="checkbox">
             <span></span>
             <span></span>
             <span></span>
            <div class="nav-links">
                <div class="nav-link">
                    <a href="#">
                        <p>INFORMACION DEL JUEGO</p>
                        <div class="sublinks-underline"></div>
                    </a>
                </div>
                <div class="nav-link">
                    <a href="{{url('campeones')}}"><p>
                        CAMPEONES
                    </p>
                        <div class="sublinks-underline"></div>
                    </a>
                </div>
                <div class="nav-link">
                    <a href="{{url('catalogo')}}"><p>
                        SKINS
                    </p>
                        <div class="sublinks-underline"></div>
                    </a>
                </div>
                <div class="nav-link">
                    <a href="#">
                        <p>NOTICIAS<svg class="svg-flecha" viewBox="0 0 8 5"><path d="M.707 1.707l2.586 2.586a1 1 0 001.414 0l2.586-2.586C7.923 1.077 7.477 0 6.586 0H1.414C.524 0 .077 1.077.707 1.707z"></path></svg></p>
                    </a>
                    <ul class="nav-sublinks">
                        <div class="sublinks-underline"></div>
                        <li class="nav-sublink"><a href="#">Todas</a></li>
                        <li class="nav-sublink"><a href="#">Actualizaciones del juego</a></li>
                        <!-- <li class="nav-sublink"><a href="#">Esports</a></li>
                        <li class="nav-sublink"><a href="#">Desarrollo</a></li> -->
                        <li class="nav-sublink"><a href="{{url('historias')}}">Historias</a></li>
                        <!-- <li class="nav-sublink"><a href="#">Multimedia</a></li>
                        <li class="nav-sublink"><a href="#">Merchandising</a></li>
                        <li class="nav-sublink"><a href="#">Comunidad</a></li>
                        <li class="nav-sublink"><a href="#">Riot Games</a></li> -->
                    </ul>
                </div>
                <div class="nav-link">
                    <a href="{{url('notas')}}"><p>
                        NOTAS DE VERSIÓN
                    </p>
                        <div class="sublinks-underline"></div>
                    </a>
                </div>
                <!-- <div class="nav-link"><a href="#">
                    <p>DESCUBRIR<svg class="svg-flecha" viewBox="0 0 8 5"><path d="M.707 1.707l2.586 2.586a1 1 0 001.414 0l2.586-2.586C7.923 1.077 7.477 0 6.586 0H1.414C.524 0 .077 1.077.707 1.707z"></path></svg></p>
                </a>
                <ul class="nav-sublinks">
                    <div class="sublinks-underline"></div>
                        <li class="nav-sublink"><a href="#">League Displays</a></li>
                        <li class="nav-sublink"><a href="#">Riot Mobile</a></li>
                        <li class="nav-sublink"><a href="#">Creador de Avatares</a></li>
                    </ul>
                </div> -->

                </div>
            </div>
        </nav>
    </div>
    <div class="nav-right">
        <input class="burger" id="abrir-cerrar" name="abrir-cerrar" type="checkbox" value="" />
        <label for="abrir-cerrar" class="toggle-button">
            <span class="cerrar" title="Cerrar"></span>
            <span class="abrir" title="Abrir"></span>
        </label>
        <div class="buttons">
            <a href="{{ route('login') }}" class="btn-sesion"><button>INICIAR SESIÓN</button></a>
            <a href="{{ route('register') }}" class="btn-jugar"><button>REGISTRARSE</button></a>
        </div>
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))

                @endif

                @if (Route::has('register'))

                @endif
            @else
                <li class="nav-item dropdown">
                    <a class="btn_log" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       <p class="btn_log_texto">
                        {{ Auth::user()->name }}
                       </p>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown" >
                        <a class="btn_log"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                          <p class="btn_log_texto">
                            {{ __('Cerrar Sesión') }}
                          </p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Estado se sesión') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ya iniciaste sesión!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
