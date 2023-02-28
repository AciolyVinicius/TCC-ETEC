@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
            	
            	@if(Auth::user()->can('view_turno'))
               		<a href="/turnos" class="pull-right">Listagem dos Turnos</a>
                @endif
                
                <div class="panel-heading">
                	<h1>Turno</h1>

                </div>

                <div class="panel-body">
          
                	<h1>Visualizando Turno: {{ $turno->nome }}</h1>

				    <div class="jumbotron text-center">
	        			<h2>{{ $turno->nome }}</h2>
	        			<p>
				            <strong>Hora de Inicio: </strong> {{ $turno->hr_inicio }} / 
	            			<strong>Hora de Termino: </strong>  {{$turno->hr_final}}<br><br>
	            			<strong>Descrição: </strong>  {{$turno->descricao}}
	        			</p>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
