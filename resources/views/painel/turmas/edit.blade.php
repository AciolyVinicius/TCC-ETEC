@extends('layouts.app2')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid"> 
        <div class="panel" style="background: #1abc9c; color: white;">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"><h4>Editar Turma</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/turmas')}}" class="pull-right btn btn-default">Listagem das Turmas</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-style-5">

                            <form class="form-horizontal" method="POST" action="/painel/turmas/edit/{{$turma->id}}">                        
                            {{ csrf_field() }}
                            
                                <fieldset>
                                    <legend><span class="number">1</span> Informações da Turma</legend>

                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ $turma->nome }}" placeholder="Nome *" required  autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif

                                    <input id="dt_inicio" type="date" class="form-control" name="dt_inicio" value="{{ $turma->dt_inicio }}" placeholder="Data de Inicio" required autofocus>

                                    @if ($errors->has('dt_inicio'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dt_inicio') }}</strong>
                                        </span>
                                    @endif

                                    <input id="dt_final" type="date" class="form-control" name="dt_final" value="{{ $turma->dt_final }}" placeholder="Data Final" required autofocus>

                                    @if ($errors->has('dt_final'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dt_final') }}</strong>
                                        </span>
                                    @endif

                                    <input id="qt_users" type="number" class="form-control" name="qt_users" value="{{ $turma->qt_users }}" placeholder="Capacidade maxima da turma" required autofocus>

                                    @if ($errors->has('qt_users'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('qt_users') }}</strong>
                                        </span>
                                    @endif

                                </fieldset>

                                <input type="submit" value="Cadastrar" />

                            </form>

                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>

@endsection
