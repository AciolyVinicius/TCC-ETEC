@extends('layouts.app2')

@section('content')


<div id="page-content-wrapper">
    <div class="container-fluid"> 
        <div class="panel" style="background: #1abc9c; color: white;">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"><h4>Adicionar Disciplina</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/disciplinas')}}" class="pull-right btn btn-default">Listagem das Disciplinas</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-style-5">

                            <form class="form-horizontal" method="POST" action="/painel/disciplinas/salvar">                        
                            {{ csrf_field() }}
                            
                                <fieldset>
                                    <legend><span class="number">1</span> Informações da Disciplina</legend>

                            <div class="form-group{{ $errors->has('id_instituicao') ? ' has-error' : '' }}">
                                <label for="id_instituicao" class="col-md-4 control-label" style="color: black;">Instituicao *</label>

                                <div class="col-md-6">
                                    <select name="id_instituicao" class="form-control">
                                        @foreach($instituicao as $instituicao)
                                        <option value="{{$instituicao->id}}">{{$instituicao->nome_fantasia}}</option>
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


                            
                            <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Nome *" required  autofocus>

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif

                            <textarea id="descricao" type="text" class="form-control" name="descricao" value="{{ old('descricao') }}" required autofocus placeholder="Descrição da Disciplina *"></textarea>

                                @if ($errors->has('descricao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                @endif

                            <textarea id="ementa" type="text" class="form-control" name="ementa" rows="9" value="{{ old('ementa') }}" required autofocus placeholder="Ementa da Disciplina *"></textarea>

                                @if ($errors->has('ementa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ementa') }}</strong>
                                    </span>
                                @endif
    
                            
                            <input id="cargahoraria_disciplina" type="number" class="form-control" name="cargahoraria_disciplina" min="0" value="{{ old('cargahoraria_disciplina') }}" placeholder="Carga horario Total *" required autofocus>

                                @if ($errors->has('cargahoraria_disciplina'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cargahoraria_disciplina') }}</strong>
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
