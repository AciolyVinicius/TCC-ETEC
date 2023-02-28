@extends('layouts.app2')

@section('content')

	<!-- Page content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1>Gerenciar</h1>
                        <hr>
                        
                        <div class="row">

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="painel/instituicoes/">
                                <center>
                                  <i id="icon_gerenciamento" class="fa fa-building tamanho" aria-hidden="true"></i></i>
                                  <div class="caption">
                                    <h3>Instituições</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="painel/users/">
                                <center>
                                  <i id="icon_gerenciamento" class="fa fa-user-circle tamanho" aria-hidden="true"></i>
                                  <div class="caption">
                                    <h3>Usuários</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="painel/cursos/">
                                <center>
                                  <i id="icon_gerenciamento" class="glyphicon glyphicon-education tamanho"></i>
                                  <div class="caption">
                                    <h3>Cursos</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="painel/disciplinas/">
                                <center>
                                  <i id="icon_gerenciamento" class="glyphicon glyphicon-book tamanho"></i>
                                  <div class="caption">
                                    <h3>Disciplinas</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="/home">
                                <center>
                                  <i class="fa fa-bullhorn tamanho" id="icon_gerenciamento" aria-hidden="true"></i>
                                  <div class="caption">
                                    <h3>Avisos</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="painel/turmas/">
                                <center>
                                  <i id="icon_gerenciamento" class="fa fa-users tamanho" aria-hidden="true"></i>
                                  <div class="caption">
                                    <h3>Turmas</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                      </div>

                      <div class="row">

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="painel/turnos/">
                                <center>
                                  <i id="icon_gerenciamento" class="fa fa-clock-o tamanho" aria-hidden="true"></i>
                                  <div class="caption">
                                    <h3>Turnos</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          
                          <!--colocar dentro da tela de disciplinas-->
                          <!--<div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="">
                                <center>
                                  <i id="icon_gerenciamento" class="glyphicon glyphicon-pencil tamanho"></i>
                                  <div class="caption">
                                    <h3>Notas</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="">
                                <center>
                                  <i id="icon_gerenciamento" class="fa fa-book tamanho" aria-hidden="true"></i>
                                  <div class="caption">
                                    <h3>Materiais</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="">
                                <center>
                                  <i id="icon_gerenciamento" class="glyphicon glyphicon-signal tamanho"></i>
                                  <div class="caption">
                                    <h3>Frequencia</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>

                          

                          <div class="col-sm-6 col-md-2">
                            <div class="thumbnail">
                              <a href="">
                                <center>
                                  <i class="fa fa-files-o tamanho" id="icon_gerenciamento" aria-hidden="true"></i>
                                  <div class="caption">
                                    <h3>Avaliações</h3>
                                  </div>
                                </center>
                              </a>
                            </div>
                          </div>-->
                          <!--colocar dentro disciplinas-->

                        </div>                       


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection