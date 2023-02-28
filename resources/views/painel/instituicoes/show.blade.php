@extends('layouts.app2')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid"> 
        <div class="panel" style="border-color: black;">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-11">
                        <h1>Instituição</h1>    
                    </div>
                    <div class="col-md-1">
                        @if(Auth::user()->can('view_instituicao'))
                    <div class="col-md-2"><a href="{{url('/painel/instituicoes')}}" class="pull-right btn btn-default">Listagem das Instituições</a></div>
                    @endif    
                </div>
            </div>
            
                <div class="panel-body">
          
                	<h1>Visualizando {{ $instituicao->nome_fantasia }}</h1>

				    <div class="jumbotron text-center">
	        			<h2>{{ $instituicao->nome_fantasia }}</h2><br>
	        			<p>
				            <strong>Nome:</strong> {{ $instituicao->nome }} <br>
	            			<strong>Nome Fantasia: </strong> {{ $instituicao->nome_fantasia }} <br>
	            			<strong>Endereço: </strong>  {{$instituicao->endereco}} <br>
	        			    <strong>Categoria:</strong> {{ $instituicao->categoria }} <br>
                            <strong>CNPJ:</strong> {{ $instituicao->cnpj }} <br>
                            <strong>Contato 1:</strong> {{ $instituicao->contato1 }} <br>
                            <strong>Contato 2:</strong> {{ $instituicao->contato2 }} <br>
                            <strong>E-mail:</strong> {{ $instituicao->email }}
                        </p>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
