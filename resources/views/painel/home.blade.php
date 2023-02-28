@extends('layouts.app2')

@section('content')
<!--<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">


                <div class="panel-heading">Avisos
                    <a href="/avisos/add" class="pull-right">Adicionar Aviso</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->can('add_user'))
                        {{'pode add user'}} <br><br>
                    @endif
                    
                    Usuário Logado!
                </div>
            </div>
        </div>
    </div>
</div>-->

<!-- Page content -->
        <div id="page-content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-md-1"> 
                    <i class="fa fa-bullhorn tamanho" id="icon_gerenciamento" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-7">
                    <h1><span>Avisos</span></h1>
                  </div>
                  <div class="col-md-1">
                    <i class="fa fa-line-chart tamanho" id="icon_gerenciamento" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-2">
                    <h1><span>Status</span></h1>
                  </div>
                </div>

                <hr><br>
 
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-3">
                              <h3 class="panel-title" style="padding-top: 8px;">Avisos Gerais</h3>  
                            </div>
                            @if(Auth::user()->can('add_aviso'))
                            <div class="col-md-8">
                              <h5 class="text-center pull-right" style="padding-left: 30px;"> <a id="icon_tables" style="text-decoration: none; color: green" href="/painel/avisos/add"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span> Novo Aviso</h5></a> 
                            </div>
                            @endif
                            <div class="col-md-1">
                              <a class="btn btn-default btn-clickable pull-right" href="#">
                                <i class="fa fa-chevron-down"></i> 
                              </a>
                            </div>
                          </div>
                        </div>
                
                        <div class="panel-body">
                          
                          <table class="table table-inverse">
                            <thead>
                              <th class="col-md-4">Titulo</th>
                              <th class="col-md-1">Data</th>
                              <th class="col-md-2">Autor</th>
                              <th class="col-md-2">Categoria</th>
                              <th class="col-md-3">Ação</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Caravana para BGS</td>
                                <td>21/2/2016</td>
                                <td>Kelly</td>
                                <td>Diretor</td>
                                <td>
                                  <button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                  <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                              </tr>
                              <tr>
                                <td>Festa de Aniversario da Etec</td>
                                <td>21/2/2016</td>
                                <td>Kelly</td>
                                <td>Diretor</td>
                                <td>
                                  <button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                  <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                              </tr>
                            </tbody>
                          </table>


                        </div>        
                      </div>
                    </div>


                    <div class="col-lg-4">
                      
                      <div class="" style="background-color: blue;">
                        oi
                      </div>

                    </div>
                  


                  </div>

                  <div class="row">
                    <div class="col-md-8">
                      <div class="panel panel-success">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-3">
                              <h3 class="panel-title" style="padding-top: 8px;">Avisos Curso</h3>
                            </div>
                            @if(Auth::user()->can('add_aviso'))
                            <div class="col-md-8">
                              <h5 class="text-center pull-right" style="padding-left: 30px;"> <a id="icon_tables" style="text-decoration: none; color: green" href="/painel/avisos/add"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span> Novo Aviso</h5></a>
                            </div>
                            @endif
                            <div class="col-md-1">
                              <a class="btn btn-default btn-clickable pull-right" href="#">
                                <i class="fa fa-chevron-down"></i> 
                              </a>
                            </div>
                          </div>
                        </div>
          
                        <div class="panel-body">
                          
                          <table class="table table-inverse">
                            <thead>
                              <th class="col-md-4">Titulo</th>
                              <th class="col-md-1">Data</th>
                              <th class="col-md-2">Autor</th>
                              <th class="col-md-2">Categoria</th>
                              <th class="col-md-3">Ação</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Confraternização das Turmas de Informática</td>
                                <td>21/2/2016</td>
                                <td>Mikael</td>
                                <td>Coordenador</td>
                                <td>
                                  <button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                  <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                              </tr>
                              <tr>
                                <td>Inscrever-se para Maratona de Programação</td>
                                <td>21/2/2016</td>
                                <td>Mikael</td>
                                <td>Coordenador</td>
                                <td>
                                  <button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                  <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                              </tr>
                            </tbody>
                          </table>


                        </div>        
                      </div>
                    </div>

                    <div class="col-lg-4">
                      Quadro de Estatisticas 2
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-8">
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-3">
                              <h3 class="panel-title" style="padding-top: 8px;">Avisos Turma</h3>
                            </div>
                            @if(Auth::user()->can('add_aviso'))
                            <div class="col-md-8">
                              <h5 class="text-center pull-right" style="padding-left: 30px;"> <a id="icon_tables" style="text-decoration: none; color: green" href="/painel/avisos/add"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></span> Novo Aviso</h5></a>
                            </div>
                            @endif
                            <div class="col-md-1">
                              <a class="btn btn-default btn-clickable pull-right" href="#">
                                <i class="fa fa-chevron-down"></i> 
                              </a>
                            </div>
                          </div>
                        </div>
          
                        <div class="panel-body">
                          
                          <table class="table table-inverse">
                            <thead>
                              <th class="col-md-4">Titulo</th>
                              <th class="col-md-1">Data</th>
                              <th class="col-md-2">Autor</th>
                              <th class="col-md-2">Categoria</th>
                              <th class="col-md-3">Ação</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Banca de PTCC</td>
                                <td>30/10/2017</td>
                                <td>Giovanna Lima</td>
                                <td>Representante</td>
                                <td>
                                  <button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                  <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                              </tr>
                              <tr>
                                <td>Trabalho de TLBD - CLUB</td>
                                <td>10/11/2017</td>
                                <td>Giovanna Lima</td>
                                <td>Representante</td>
                                <td>
                                  <button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                  <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                              </tr>
                            </tbody>
                          </table>


                        </div>        
                      </div>
                    </div>


                    <div class="col-lg-4">
                      Quadro de Estatisticas 3
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
