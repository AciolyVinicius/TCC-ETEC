@extends('layouts.app2')

@section('content')

    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-md-1"> 
                            <i class="glyphicon glyphicon-user tamanho" id="icon_gerenciamento" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-11"><h1><span>Perfil</span></h1></div>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">        
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel with-nav-tabs panel-default">
                                                <div class="panel-heading">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab1default" data-toggle="tab">Seus Dados</a></li>
                                                        <li><a href="#tab2default" data-toggle="tab">Dados do Responsavel</a></li>
                                                        <li><a href="#tab3default" data-toggle="tab">Dados Instituicionais</a></li>
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="tab1default">
                                                            <div class="body">
                                                                <table class="table table-striped table-hover">
                                                                    <thead><th colspan="2"><h3>Seus Dados</h3></th></thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="col-lg-3">Nome Completo:</th>
                                                                            <td class="col-lg-9">{{$user->name}} {{$user->sobrenome}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="col-lg-3">Data de Nascimento:</th>
                                                                            <td>{{$user->nascimento}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="col-lg-3">Endereço:</th>
                                                                            <td>{{$user->id_endereco}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="col-lg-3">CPF:</th>
                                                                            <td>{{$user->cpf_user}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="col-lg-3">RG:</th>
                                                                            <td>{{$user->rg_user}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="col-lg-3">E-mail:</th>
                                                                            <td>{{$user->email}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="col-lg-3">Contato 1:</th>
                                                                            <td>{{$user->contato1}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="col-lg-3">Contato 2:</th>
                                                                            <td>{{$user->contato2}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab2default">
                                                            <table class="table table-hover">                   
                                                                <thead><th colspan="2"><h3>Dados do Responsavel</h3></th></thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="col-lg-3">Nome:</th>
                                                                        <td>{{$user->nome_responsavel}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-lg-3">E-mail:</th>
                                                                        <td>{{$user->email_responsavel}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-lg-3">Contato:</th>
                                                                        <td>{{$user->contato_responsavel}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-lg-3">Documento:</th>
                                                                        <td>{{$user->cpf_responsavel}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab3default">
                                                            <table class="table">
                                                                <thead><th colspan="2"><h3>Dados Instituicionais</h3></th></thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="col-lg-3">Nome:</th>
                                                                        <td>{{$instituicao->nome_fantasia}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-lg-3">Endereço:</th>
                                                                        <td>{{$instituicao->endereco}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-lg-3">Curso:</th>
                                                                        <td>{{$curso->nome}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-lg-3">Modulo:</th>
                                                                        <td>{{'Modulo'}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
