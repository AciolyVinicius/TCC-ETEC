<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--DataTables CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/datatables.css') }}">

    <!--Font awsome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome-4.7.0/css/font-awesome.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!--<li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                        @if(Auth::user())
                            <li><a href="/perfil">Perfil do Usuario</a></li>
                            @if(Auth::user()->can('view_user'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Usuarios  <span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/users/add">
                                            Adicionar usuarios
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/users/">
                                            Listagem de Usuarios
                                        </a>
                                    </li>
                               </ul>
                            </li>
                            @endif
                            @if(Auth::user()->can('view_curso'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Cursos  <span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->can('add_curso'))
                                    <li>
                                        <a href="/cursos/add">
                                            Adicionar Curso
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/cursos/">
                                            Listagem de Cursos
                                        </a>
                                    </li>
                               </ul>
                            </li>
                            @endif
                            @if(Auth::user()->can('view_disciplina'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Disciplinas  <span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->can('add_disicplina'))
                                    <li>
                                        <a href="/disciplinas/add">
                                            Adicionar Disciplina
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/disciplinas/">
                                            Listagem das Disciplinas
                                        </a>
                                    </li>
                               </ul>
                            </li>
                            @endif
                            @if(Auth::user()->can('view_turma'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Turmas <span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/turmas/add">
                                            Adicionar Turma
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/turmas/">
                                            Listagem das Turmas
                                        </a>
                                    </li>
                               </ul>
                            </li>
                            @endif
                            @if(Auth::user()->can('view_turno'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Turnos <span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->can('add_turno'))
                                    <li>
                                        <a href="/turnos/add">
                                            Adicionar Turno
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/turnos/">
                                            Listagem dos Turnos
                                        </a>
                                    </li>
                               </ul>
                            </li>
                            @endif
                            @if(Auth::user()->can('view_material'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Materiais <span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->can('add_material'))
                                    <li>
                                        <a href="/materiais/add">
                                            Adicionar Material
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/materiais/">
                                            Listagem dos Materiais
                                        </a>
                                    </li>
                               </ul>
                            </li>
                            @endif
                            @if(Auth::user()->can('add_instituicao'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Instituições <span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->can('add_instituicao'))
                                    <li>
                                        <a href="/instituicoes/add">
                                            Adicionar Instituição
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/instituicoes/">
                                            Listagem das Instituições
                                        </a>
                                    </li>
                               </ul>
                            </li>
                            @endif

                        @endif    
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">

                    @yield('content')
                
                </div>
            </div>    
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/DataTables/datatables.js') }}"></script>
    <script src="{{ asset('js/tables.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
