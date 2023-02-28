<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>S.A.G.A. - Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/ui/dist/semantic.css')}}">

    <script type="text/javascript" src="{{asset('vendor/ui/dist/semantic.js')}}"></script>

    <style type="text/css">
        body{
            width: 97%;
            height: 100%;
        }
        #conteudo{
            margin-bottom: 58px; 
        }
        .footer.segment {
            padding: 3em 0em;
    }
    #footer{
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
    }

    </style>
<div class="ui container">
    <div class="ui large top fixed inverted menu">
        <div class="ui container">
            <a href="/" style="color: white; margin: 5%; font-size: 30px;">S.A.G.A.</a>
            <div class="right menu">
                <div class="item">
                    <a href="/" class="ui inverted blue button">Inicio</a>
                </div>
                <div class="item">
                    <a href="solicitar.blade.php" class="ui red inverted button">Solicitar</a>
                </div>
            </div>
        </div>
    </div>

    <div id="conteudo" class="ui grid">
        <div class="row"></div>
        <div class="row">
            <div class="five wide column"></div>
            <div class="six wide column">
                <br><br>

                    <fieldset style="background-color: black; opacity: 0.9; color: white; border-radius: 5%;">
                        <form class="ui form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                
                            <legend><h2>Acessar Sistema</h2></legend>

                            <label for="email" class="col-md-4 control-label"><b>E-mail</b>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </label>
                            <br><br>
                            <label for="email" class="col-md-4 control-label"><b>Senha</b>
                            <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            <br><br>
                            
                            <center>
                            
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                            </label>
                            
                            <br><br>
                            
                            <button type="submit" class="ui green inverted button">
                                Entrar
                            </button>
                            <br><br>

                
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Esqueceu sua senha?
                            </a>
                            </center>
                        </form>

                    </fieldset>

            </div>
            <div class="five wide column"></div>
        </div>
    </div>

    <!--footer-->
    <div id="footer" class="ui inverted vertical footer segment" style="margin-bottom: -30px;">
    <div class="ui container" style="padding-left: 3%;">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
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

    

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/DataTables/datatables.js') }}"></script>
    <script src="{{ asset('js/tables.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
<html>
