@extends('layouts.app2')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        @if(Session::has('message2'))
            <div class="alert alert-danger">{{Session::get('message2')}}</div>
        @endif
    </div>
</div>


<!-- Page content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                        
                <h1>Gerenciamento das Instituições</h1><hr>

                <div class="container-fluid">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                   <h2 class="text-center pull-left" style="padding-left: 30px;"> <a id="icon_tables" style="text-decoration: none; color: green" href="/painel/instituicoes/add"><i class="fa fa-plus" aria-hidden="true"></i></span> Cadastrar</h2></a> 
                                </div>            
                            </div>
                        </div>

                        <div class="panel-body table-responsive">
                            <table id="instituicoes_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Nome </th>
                                        <th>Nome Fantasia</th>
                                        <th>Categoria</th>
                                        <th>E-mail Instituicional</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            
                                    @foreach($instituicao as $instituicao)
                                            
                                        <tr class="edit" id="detail">
                                            <td>{{$instituicao->nome}}</td>
                                            <td>{{$instituicao->nome_fantasia}}</td>
                                            <td>{{$instituicao->categoria}}</td>
                                            <td>{{$instituicao->email}}</td>
                                            <td id="acao" class="text-center">
                                                <a href="/painel/instituicoes/show/{{$instituicao->id}}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="/painel/instituicoes/edit/{{$instituicao->id}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                <a href="/painel/instituicoes/delete/{{$instituicao->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                            
                                    @endforeach
                                    
                                </tbody>
                            </table>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection