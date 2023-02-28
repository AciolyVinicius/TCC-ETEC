@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
            	
            	@if(Auth::user()->can('view_disciplina'))
               		<a href="/disciplinas" class="pull-right">Listagem das Disciplinas</a>
                @endif
                
                <div class="panel-heading">
                	<h1>Disciplina</h1>

                </div>

                <div class="panel-body">
          
                	<h1>Visualizando {{ $disciplina->nome }}</h1>

				    <div class="jumbotron text-center">
	        			<h2>{{ $disciplina->nome }}</h2>
	        			<p>
				            <strong>Descrição:</strong> {{ $disciplina->descricao }}<br>
	            			<strong>Ementa:</strong> {{ $disciplina->ementa }}<br>
	            			<strong>Carga Horaria Total:</strong>  {{$disciplina->cargahoraria_disciplina}} horas
	        			</p>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
