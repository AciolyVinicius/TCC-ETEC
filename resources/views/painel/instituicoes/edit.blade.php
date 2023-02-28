@extends('layouts.app2')

@section('content')

<script>
    function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)
                                          
        if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
        }
                                          
    }
</script>

<div id="page-content-wrapper">
    <div class="container-fluid"> 
        <div class="panel" style="background: #1abc9c; color: white;">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10"><h4>Editar Instituição</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/instituicoes')}}" class="pull-right btn btn-default">Listagem das Instituições</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-style-5">

                            <form class="form-horizontal" method="POST" action="/painel/instituicoes/edit/{{$instituicao->id}}">                        
                            {{ csrf_field() }}
                                <fieldset>
                                    <legend><span class="number">1</span> Informação da Instituição</legend>

                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ $instituicao->nome }}" placeholder="Nome *" required autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif

                                    <input id="nome_fantasia" type="text" class="form-control" name="nome_fantasia" value="{{ $instituicao->nome_fantasia }}" placeholder="Nome Fantasia *" required autofocus>

                                    @if ($errors->has('nome_fantasia'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome_fantasia') }}</strong>
                                        </span>
                                    @endif

                                    <input id="endereco" type="text" class="form-control" name="endereco" value="{{ $instituicao->endereco }}" placeholder="Endereço Completo *" required autofocus>

                                    @if ($errors->has('endereco'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('endereco') }}</strong>
                                        </span>
                                    @endif

                                    <label for="role" class="col-md-8 control-label" style="color: black;">Selecione a Categoria da Instituição</label>

                                    <div class="col-md-4">
                                        <select name="categoria" class="form-control">
                                            <option value="1">Categoria 1</option>
                                            <option value="2">Categoria 2</option>
                                            <option value="3">Categoria 3</option>
                                            <option value="4">Categoria 4</option>
                                            <option value="5">Categoria 5</option>
                                        </select>
                                    </div>

                                    <input id="cnpj" type="text" class="form-control" OnKeyPress="formatar('##.###.###/####-##', this)" maxlength="18" name="cnpj" value="{{ $instituicao->cnpj }}" placeholder="CNPJ *" required>

                                    @if ($errors->has('cnpj'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cnpj') }}</strong>
                                        </span>
                                    @endif

                                    <input id="contato1" type="text" class="form-control" OnKeyPress="formatar('##-####-####', this)" maxlength="12" name="contato1" value="{{ $instituicao->contato1 }}" placeholder="Telefone para Contato *" required>

                                    @if ($errors->has('contato1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contato1') }}</strong>
                                        </span>
                                    @endif

                                    <input id="contato2" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" maxlength="13" name="contato2" value="{{ $instituicao->contato2 }}" placeholder="Telefone/Celular para Contato">

                                    @if ($errors->has('contato2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contato2') }}</strong>
                                        </span>
                                    @endif

                                    <input id="email" type="email" class="form-control" name="email" value="{{ $instituicao->email }}" placeholder="E-mail da Instituição" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </fieldset>

                                <input type="submit" value="Salvar Alterações" />

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
