@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
            	
            	@if(Auth::user()->can('view_user'))
               		<a href="/users" class="pull-right">Listagem dos Usuários</a>
                @endif
                
                <div class="panel-heading">
                	<h1>Usuário</h1>

                </div>

                <div class="panel-body">
          
                	<h1>Visualizando Usuário: {{ $user->name }}</h1>

				    <div class="jumbotron text-center">
	        			<h2>{{ $user->name }}</h2>
	        			<p>
				            <strong>Nome: </strong> {{ $user->name }} {{$user->sobrenome}} <br>
	            			<strong>Data de Nascimento: </strong>  {{$user->nascimento}}<br>
	            			<strong>Endereço: </strong>  {{'$user->id_endereco[0]'}}<br>
                            <strong>CPF: </strong>  {{$user->cpf_user}} / 
                            <strong>RG: </strong>  {{$user->rg_user}}<br>
                            <strong>Telefone Fixo: </strong>  {{$user->contato1}}<br>
                            <strong>Celular: </strong>  {{$user->contato2}}<br>
                            <strong>E-mail Cadastrado: </strong>  {{$user->email}}<br>
                            <br><br>
                            <strong>Nome do Resposavel: </strong>  {{$user->nome_responsavel}}<br>
                            <strong>Contato do Responsavel: </strong>  {{$user->contato_responsavel}}<br>
	        			    <strong>E-mail do Responsavel: </strong>  {{$user->email_responsavel}}<br>
                            <strong>CPF do Responsavel: </strong>  {{$user->cpf_responsavel}}<br>
                        </p>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
