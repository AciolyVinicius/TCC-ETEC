@extends('layouts.app2')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid"> 
        <div class="panel" style="background: #1abc9c; color: white;">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"><h4>Editar Curso</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/cursos')}}" class="pull-right btn btn-default">Listagem dos Cursos</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-style-5">

                            <form class="form-horizontal" method="POST" action="/painel/cursos/edit/{{$curso->id}}">                        
                            {{ csrf_field() }}
                            
                                <fieldset>
                                    <legend><span class="number">1</span> Informações do Curso</legend>

                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ $curso->nome }}" placeholder="Nome *" required  autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif

                                    <textarea id="descricao" type="text" class="form-control" name="descricao" rows="9" value="" placeholder="Descrição do Curso *" required autofocus>{{$curso->descricao}}</textarea>

                                    @if ($errors->has('descricao'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('descricao') }}</strong>
                                        </span>
                                    @endif

                                    <input id="cargahoraria_curso" type="number" class="form-control" name="cargahoraria_curso" min="0" value="{{ $curso->cargahoraria_curso }}" placeholder="Carga Horario Total do Curso *" required autofocus>

                                    @if ($errors->has('cargahoraria_curso'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cargahoraria_curso') }}</strong>
                                        </span>
                                    @endif

                                </fieldset>

                                <input type="submit" value="Salvar Alterações" />

                            </form>

                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>

@endsection
