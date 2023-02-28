@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
            	
            	@if(Auth::user()->can('view_material'))
               		<a href="/materiais" class="pull-right">Listagem dos Materiais</a>
                @endif
                
                <div class="panel-heading">
                	<h1>Material</h1>

                </div>

                <div class="panel-body">
          
                	<h1>Visualizando Material: {{ $material->nome }}</h1>

				    <div class="jumbotron text-center">
	        			<h2>{{ $material->nome }}</h2>
	        			<p>
				            <strong>Nome: </strong> {{ $material->nome }}<br>
	            			<strong>Descrição: </strong>  {{$material->descricao}}<br>
	            			<strong>Material em Anexo: </strong>  {{$material->anexo_material}}
	        			</p>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
