@extends('layouts.app2')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid"> 
        <div class="panel" style="background: #1abc9c; color: white;">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"><h4>Adicionar Turma</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/turmas')}}" class="pull-right btn btn-default">Listagem das Turmas</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-style-5">

                            <form class="form-horizontal" method="POST" action="/painel/turmas/salvar">                        
                            {{ csrf_field() }}
                            
                                <fieldset>
                                    <legend><span class="number">1</span> Informações da Turma</legend>

                                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                        <label for="role" class="col-md-4 control-label" style="color: black;">Instituicao *</label>

                                        <div class="col-md-6">
                                            <select name="role" class="form-control">
                                                @foreach($instituicao as $instituicao)
                                                <option value="{{ $instituicao->id }}">{{ $instituicao->nome_fantasia }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                        <label for="role" class="col-md-4 control-label" style="color: black;">Curso *</label>

                                        <div class="col-md-6">
                                            <select name="role" class="form-control">
                                                @foreach($curso as $curso)
                                                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                        <label for="role" class="col-md-4 control-label" style="color: black;">Disciplina *</label>

                                        <div class="col-md-6">
                                            <select name="role" class="form-control">
                                                @foreach($disciplina as $disciplina)
                                                <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                        <label for="role" class="col-md-4 control-label" style="color: black;">Turno *</label>

                                        <div class="col-md-6">
                                            <select name="role" class="form-control">
                                                @foreach($turno as $turno)
                                                <option value="{{ $turno->id }}">{{ $turno->nome }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Nome *" required  autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif

                                    <input id="dt_inicio" type="date" class="form-control" name="dt_inicio" value="{{ old('dt_inicio') }}" placeholder="Data de Inicio" required autofocus>

                                    @if ($errors->has('dt_inicio'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dt_inicio') }}</strong>
                                        </span>
                                    @endif

                                    <input id="dt_final" type="date" class="form-control" name="dt_final" value="{{ old('dt_final') }}" placeholder="Data Final" required autofocus>

                                    @if ($errors->has('dt_final'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dt_final') }}</strong>
                                        </span>
                                    @endif

                                    <input id="qt_users" type="number" class="form-control" name="qt_users" value="{{ old('qt_users') }}" placeholder="Capacidade maxima da turma" required autofocus>

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
