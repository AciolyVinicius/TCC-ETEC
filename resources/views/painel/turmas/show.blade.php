@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
            	
            	@if(Auth::user()->can('view_turma'))
               		<a href="/turmas" class="pull-right">Listagem das Turmas</a>
                @endif
                
                <div class="panel-heading">
                	<h1>Turma</h1>

                </div>

                <div class="panel-body">
          
                	<h1>Visualizando Turma: {{ $turma->nome }}</h1>

				    <div class="jumbotron text-center">
	        			<h2>{{ $turma->nome }}</h2>
	        			<p>
				            <strong>Data de Inicio: </strong> {{ $turma->dt_inicio }}<br>
	            			<strong>Data de Termino: </strong>  {{$turma->dt_final}}<br>
	            			<strong>Quantidade de Alunos: </strong>  {{$turma->qt_users}}
	        			</p>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
