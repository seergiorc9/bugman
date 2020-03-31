<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet"   href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="home">Bugman</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Usuarios&nbsp; <span class="float-right badge badge-light round">{{count($users)}}</span>
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Proyectos<span class="float-right badge badge-light round">{{count($proyectos)}}</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Incidencias<span class="float-right badge badge-light round">{{count($incidencias)}}</span></a>
                </li>

              </ul>
              <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Administrador</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </ul>
            </div>
          </nav>

        <main class="py-4">

                <div class="row justify-content-center">
                  <div class="col-3">
                      <div class="card" style="margin:0 10px;">
                        <article class="card-group-item text-white">
                            <header class="card-header bg-primary"><h6 class="title">MENU </h6></header>
                            <div class="filter-content">
                                <div class="list-group list-group-flush">
                                  <a href="/usuarios" class="list-group-item">GESTIÓN DE USUARIOS</a>
                                  <a href="/proyectos" class="list-group-item">GESTIÓN DE PROYECTOS</a>
                                  <a href="/incidencias" class="list-group-item">GESTIÓN DE INCIDENCIAS</a>
                                </div>  <!-- list-group .// -->
                            </div>
                        </article> <!-- card-group-item.// -->
                       </div>

                  </div>
                  <div class="col-9">
                    @yield('content')
                  </div>
                </div>

        </main>
    </div>
</body>
</html>
