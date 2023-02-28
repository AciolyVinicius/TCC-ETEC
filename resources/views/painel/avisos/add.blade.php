@extends('layouts.app2')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid"> 
        <div class="panel" style="background: #1abc9c; color: white;">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"><h4>Adicionar Aviso</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/cursos')}}" class="pull-right btn btn-default">Listagem dos Avisos</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-style-5">

                            <form class="form-horizontal" method="POST" action="/painel/avisos/salvar">                        
                            {{ csrf_field() }}
                            
                                <fieldset>
                                    <legend><span class="number">1</span> Aviso</legend>

	                            <div class="form-group{{ $errors->has('destino') ? ' has-error' : '' }}">
                               		<label for="destino" class="col-md-4 control-label" style="color: black;">Direcionado para:</label>

                                	<div class="col-md-5">
                                   		<select name="destino" class="form-control">
	                                        <option value="1">Geral</option>
	                                        <option value="2">Turma</option>
                                        	<option value="3">Curso</option>
                                    	</select>
                                	</div>
                            	</div>
	                        
	                            <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Nome do Aviso *" required autofocus>
					                @if ($errors->has('nome'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('nome') }}</strong>
	                                    </span>
	                                @endif
	                               
	                            <textarea id="aviso" type="text" class="form-control" name="aviso" rows="6" value="{{ old('aviso') }}" placeholder="Escreva seu Aviso *" required autofocus></textarea>

	                                @if ($errors->has('aviso'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('aviso') }}</strong>
	                                    </span>
	                                @endif
	                                
	                            <label for="dt_aviso" class="col-md-4 control-label" style="color: black;">Data do Aviso</label>
	                                <div class="col-md-6">
	                                    <input id="dt_aviso" type="date" class="form-control" name="dt_aviso" min="0" value="{{ old('dt_aviso') }}" required autofocus>

	                                    @if ($errors->has('dt_aviso'))
	                                        <span class="help-block">
	                                            <strong>{{ $errors->first('dt_aviso') }}</strong>
	                                        </span>
	                                    @endif
	                                </div>
	                            
	                            <label for="anexo_arquivo" class="col-md-4 control-label" style="color: black;">Anexar Arquivo</label>

	                                <div class="col-md-6">
	                                    <input id="anexo_arquivo" type="file" class="form-control" name="anexo_arquivo" value="{{ old('anexo_arquivo') }}">

	                                    @if ($errors->has('anexo_arquivo'))
	                                        <span class="help-block">
	                                            <strong>{{ $errors->first('anexo_arquivo') }}</strong>
	                                        </span>
	                                    @endif
	                                </div>
                                
	                            
	                            
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