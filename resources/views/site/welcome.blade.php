<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>S.A.G.A. - Sistema Academico</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--SEMANTIC-->
        <link rel="stylesheet" type="text/css" href="../ui/dist/semantic.css">

        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/reset.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/site.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/container.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/grid.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/header.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/image.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/menu.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/divider.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/dropdown.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/segment.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/button.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/list.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/icon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/sidebar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/components/transition.css')}}">

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }*/


            body{
      width: 99%;
      margin-left: 0.2%;
      margin-right: 0.2%;
    }

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }

        </style>
    </head>
    <body>
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="/solicitar">Solicitar</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    S.A.G.A.
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            -->

            <!-- Following Menu -->
  <div class="ui large top fixed hidden menu">
      <div class="ui container">
        <a href="index.blade.php" style="color: black; margin-left: 7%; font-size: 30px;">S.A.G.A.</a>
        <a href="#home" class="item" style="margin-left: 16.5%;">Home</a>
        <a href="#objetivo" class="item">Objetivo</a>
        <a href="#solicitar" class="item">Conheça-nos</a>
        <div class="right menu">
          <div class="item" style="margin-top: 1.5%;">
              <a href="{{ route('login') }}" class="ui green button">Entrar</a>
              <a href="solicitar.blade.php" class="ui red button">Solicitar</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Sidebar Menu -->
  <div class="ui vertical inverted sidebar menu">
    <a class="active item">Home</a>
    <a class="item">Objetivo</a>
    <a class="item">Conheça-nos</a>
    <a class="item">Entrar</a>
    <a class="item">Solicitar</a>
  </div>

  <!-- Page Contents -->
  <div id="home" class="pusher">
    <div class="ui inverted vertical masthead center aligned segment" style="padding-bottom: 0; margin-bottom: 0;">
      <div class="ui container">
        <div class="ui large secondary inverted pointing menu">
          <a class="toc item"><i class="sidebar icon"></i></a>
          <a href="#home" class="active item">Home</a>
          <a href="#objetivo" class="item">Objetivo</a>
          <a href="#solicitar" class="item">Conheça-nos</a>
          
          <div class="right item">
            <a href="{{ route('login') }}" class="ui inverted green button">Entrar</a>
            <a href="solicitar.blade.php" class="ui inverted red button">Solicitar</a>
          </div>
        </div>
      </div>
      <div class="ui text container">
        <h1 class="ui inverted header">S.A.G.A.</h1>
        <h2>Aquele que ajudará na sua saga.</h2>
        <a href="{{ route('login') }}" class="ui huge green button">Acessar<i class="right arrow icon"></i></a>
      </div>
    </div>
    <hr>
  <!--conteudo da home-->
  <div class="ui container">
    <div id="objetivo" class="ui vertical stripe segment" style="padding: 0; margin: 0;">
      <div class="ui middle aligned stackable grid container">
        <div class="row"></div>

        <div class="row" style="margin: 8%;">
          <div class="eight wide column">
            <h3 class="ui header">Objetivo do S.A.G.A.</h3>
            <p>Proporcionar aos alunos um software simples e completo, voltado para a vida acadêmica do aluno em uma instituição de ensino, que cooperará para o fornecimento de informações, avisos e programações voltadas a cada estudante da mesma, o S.A.G.A.</p>

            <h3 class="ui header">Benefícios</h3>
            <p>Os benefícios são muitos, tanto para os alunos tanto para a instituição de ensino. O aluno receberá informações pertinentes ao curso e sua entidade acadêmica, ajudando em sua organização acadêmica e vida estudantil. </p>
          </div>

          <div class="eight wide right floated column">
            <div style="text-align:center"> 
              <embed src="video/pitchsaga.mp4" autostart="true" loop="true" width="580" height="360"></embed>
            </div> 
          </div>
        </div>
        
        <div class="row">
          <div class="four wide column"></div>
          <div class="seven wide column">
          
            <div class="center aligned column">
                      
              <h1><i class="icon plus green"></i>Tempo</h1>
              <h1><i class="icon plus red"></i>Organização</h1>
              <h1><i class="icon plus orange"></i>Qualidade</h1>
              <h1><i class="icon plus blue"></i>Tranquilidade</h1>
              <br><br>
            
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div id="solicitar" class="ui vertical stripe segment" style="margin: 0; padding: 0;">
    <div class="ui text container" style="padding: 8%;">
      
        <h3 class="ui header">Gostou? Conheça o S.A.G.A.</h3>
        <p style="text-align: justify;">O S.A.G.A. é um sistema de aprendizagem e gestão acadêmica, que auxiliará tanto os alunos quanto a parte administrativa da escola. Os alunos serão beneficiados pelas diversas ferramentas que o software trás, como: tarefas a fazer, materiais de estudo cedido pelos professores, comunicados dos docentes ou do representante de sala, entre outras. Já a secretaria, por exemplo, poderá realizar o cadastro de alunos e alterações nos mesmos muito mais rapidamente.</p>
        <br><br>
        <center><a class="ui large red button" href="solicitar.blade.php">CLIQUE AQUI E SOLICITE JÁ O SISTEMA</a></center>
  
    </div>
  </div>

  <div class="ui inverted vertical footer segment" style="margin: 0;">
    <div class="ui container" style="padding-left: 6%;">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Sobre</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Serviços</h4>
          <div class="ui inverted link list">
            <a href="#" class="item"></a>
            <a href="#" class="item"></a>
            <a href="#" class="item"></a>
            <a href="#" class="item"></a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Contato</h4>
          <div class="ui inverted link list">
            <a href="#" class="item"><i class="icon google"></i>S.A.G.A.</a>
            <a href="#" class="item"><i class="icon facebook"></i>S.A.G.A.</a>
            <a href="#" class="item"><i class="icon youtube"></i>S.A.G.A.</a>
            <a href="#" class="item"><i class="icon instagram"></i>S.A.G.A.</a>
          </div>
        </div>
      </div>
    </div>
  </div>


            </div>
        </div>

        <!--Scripts-->
  <script src="{{asset('vendor/ui/dist/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('vendor/ui/dist/components/visibility.js')}}"></script>
  <script src="{{asset('vendor/ui/dist/components/sidebar.js')}}"></script>
  <script src="{{asset('vendor/ui/dist/components/transition.js')}}"></script>
  
  <script>
  $(document).ready(function() {
    // fix menu when passed
    $('.masthead').visibility({
      once: false, onBottomPassed: function() {
        $('.fixed.menu').transition('fade in');
      },
      onBottomPassedReverse: function() {
        $('.fixed.menu').transition('fade out');
      }
  });
  
  // Cria barra lateral e acrescenta ao menu de abertura
    $('.ui.sidebar').sidebar(
    'attach events', '.toc.item');
  });
  </script>
    </body>
</html>
