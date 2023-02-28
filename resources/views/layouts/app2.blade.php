<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--DataTables CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/datatables.css') }}">
    <!--Font awsome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome-4.7.0/css/font-awesome.css') }}">
    <!--CSS Sidebar-->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/main2.css') }}">
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <!--CSS form-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">

</head>
<body>

    <nav class="navbar navbar-inverse navbar-static-top" style="top: 0; left: 0; position: fixed; width: 100%;">
      <div class="container-fluid">

          <div class="col-md-1">
            <a href="#" class="btn btn-success" style="margin-top: 5px;" id="menu-toggle"><i class="glyphicon glyphicon-align-justify"></i></a>
          </div>
          
          <div class="col-md-1">
          <div class="navbar-header"> 
            <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
          </div>
                    

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <li><a href="/home">Home</a></li>
                      @if(Auth::user()->can('add_user'))
                      <li><a href="/painel/">Gerenciamento</a></li>
                      @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
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

    

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                  <div class="profile-userpic">
                      <img id="foto_perfil" src="{{ asset('storage/app/public/'.Auth::user()->foto_user) }}" class="img-responsive" alt="">
                  </div>
                </li>
                <div id="dados_perfil">
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <h4><b>{{ Auth::user()->name }}</b></h4>
                    </div>
                    <div class="profile-usertitle-job">
                        <h5><b>{{ Auth::user()->roles[0]->name }}</b></h5>
                    </div>
                </div>
              
                  <div class="profile-userbuttons">
                      <button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-calendar"></i> Calendario</button>
                      <button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-bell"></i> Lembretes</button>
                  </div>
                </div>
                
                <li><a href="/perfil"><i class="glyphicon glyphicon-user">  </i>  Perfil</a></li>
                <li><a href="/home"><i class="glyphicon glyphicon-home">  </i>  Home</a></li>
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown"><i class="fa fa-book" aria-hidden="true"></i> Disciplinas <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="disciplinas/view.blade.php"><i class="glyphicon glyphicon-pencil"></i> Disciplinas 1</a></li>
                    <li><a href="#tab4default" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i> Disciplinas 2</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-education">  </i>  Notas</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-signal">  </i>  Frequencia</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-book">  </i>  Curso</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-comment">  </i>  Bate Bapo</a></li>
                @if(Auth::user()->can('add_user'))
                <li><a href="/painel/"><i class="fa fa-tachometer" aria-hidden="true"></i>  Gerenciamento</a></li>
                @endif
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper" style="margin-top: 50px;">
          
          
              @yield('content')

          
        </div>
      </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/DataTables/datatables.js') }}"></script>
    <script src="{{ asset('js/tables.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

      <!-- Menu toggle script -->
    <script>
        $("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    </script>
    <script type="text/javascript">
      $(document).on('click', '.panel-heading .btn-clickable', function(e){
          var $this = $(this);
          if(!$this.hasClass('panel-collapsed')) {
          $this.parents('.panel').find('.panel-body').slideUp();
          $this.addClass('panel-collapsed');
          $this.find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        } else {
          $this.parents('.panel').find('.panel-body').slideDown();
          $this.removeClass('panel-collapsed');
          $this.find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        }
      })
    </script>


</body>
</html>