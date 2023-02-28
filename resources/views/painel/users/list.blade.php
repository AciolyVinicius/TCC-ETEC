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
                        
                        <h1>Gerenciamento de Usuários</h1><hr>

                        <div class="container-fluid">
                          <div class="panel panel-warning">
                            <div class="panel-heading">
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                  <h2 class="text-center pull-left" style="padding-left: 30px;"> <a id="icon_tables" style="text-decoration: none; color: green" href="/painel/users/add"><i class="fa fa-user-plus" aria-hidden="true"></i></span> Cadastrar</h2></a> 
                                </div>
                                
                              </div>
                            </div>

    <div class="panel-body table-responsive">
        <table id="users_table" class="table table-hover">
            <thead>
                <tr>
                    <th>Nome </th>
                    <th>E-mail</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                    
                @foreach($users as $user)

                        
                    <tr class="edit" id="detail">
                        <td id="name" class="text-center">{{$user->name}}</td>
                        <td id="name" class="text-center">{{$user->email}}</td>
                        <td id="name" class="text-center">{{$user->roles[0]->name}}</td>
                        <td id="acao" class="text-center">
                            <a href="/painel/users/" class="btn btn-sm btn-warning"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                            <a href="/painel/users/show/{{$user->id}}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="/painel/users/edit/{{$user->id}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <a href="/painel/users/delete/{{$user->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                        
                @endforeach
                        
            </tbody>
        </table>                      
    </div>
</div>

@endsection
                            