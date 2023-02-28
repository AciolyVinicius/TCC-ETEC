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
    
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                        
                <h1>Gerenciamento das Turmas</h1><hr>

                <div class="container-fluid">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                   <h2 class="text-center pull-left" style="padding-left: 30px;"> <a id="icon_tables" style="text-decoration: none; color: green" href="/painel/turmas/add"><i class="fa fa-plus" aria-hidden="true"></i></span> Cadastrar</h2></a> 
                                </div>            
                            </div>
                        </div>

                        <div class="panel-body table-responsive">
                            <table id="cursos_table" class="table">

                                <thead>
                                    <th>Nome</th>
                                    <th>Data de Inicio</th>
                                    <th>Data de Termino</th>
                                    <th>Quantidade de Alunos</th>
                                    <th>Ações</th>
                                </thead>
                                <tbody>
                    
                                @foreach($turma as $turma)
                    
                                    <tr class="edit" id="detail">
                                        <td>{{$turma->nome}}</td>
                                        <td>{{$turma->dt_inicio}}</td>
                                        <td>{{$turma->dt_final}}</td>
                                        <td>{{$turma->qt_users}}</td>
                                        <td id="acao" class="text-center">
                                            <a href="/painel/turmas/show/{{$turma->id}}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="/painel/turmas/edit/{{$turma->id}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a href="/painel/turmas/delete/{{$turma->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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