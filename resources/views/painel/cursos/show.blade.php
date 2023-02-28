@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
            	
            	@if(Auth::user()->can('view_curso'))
               		<a href="/cursos" class="pull-right">Listagem dos Cursos</a>
                @endif
                
                <div class="panel-heading">
                	<h1>Curso</h1>

                </div>

                <div class="panel-body">
          
                	<h1>Visualizando {{ $curso->nome }}</h1>

				    <div class="jumbotron text-center">
	        			<h2>{{ $curso->nome }}</h2>
	        			<p>
				            <strong>Descrição:</strong> {{ $curso->descricao }}<br>
	            			<strong>Carga Horario Total:</strong>  {{$curso->cargahoraria_disciplina}} horas
	        			</p>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
