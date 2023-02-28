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
                    <div class="col-md-10"><h4>Editar Usuario</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/users')}}" class="pull-right btn btn-default">Listagem de Usuários</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                <div class="col-md-6">
                <div class="form-style-5">
                    <form class="form-horizontal" method="POST" action="/painel/users/edit/{{ $user->id }}">                        
                            {{ csrf_field() }}
                        <fieldset>
                            <legend><span class="number">1</span> Informações do Usuário</legend>

                            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                <label for="role" class="col-md-4 control-label" style="color: black;">Catergoria *</label>

                                <div class="col-md-6">
                                    <select name="role" class="form-control">
                                        <option value="2">Diretor</option>
                                        <option value="3">Secretaria</option>
                                        <option value="4">Coordenador</option>
                                        <option value="5">Professor</option>
                                        <option value="7">Aluno</option>
                                    </select>
                                </div>
                            </div>

                            <input id="name" type="text" class="field1" name="name" value="{{ $user->name }}" placeholder="Nome *" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                <input id="sobrenome" type="text" class="form-control" name="sobrenome" value="{{ $user->sobrenome }}" placeholder="Sobrenome do Usuário" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                <input id="nascimento" type="date" class="form-control" name="nascimento" value="{{ $user->nascimento }}" required autofocus>

                                    @if ($errors->has('nascimento'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nascimento') }}</strong>
                                        </span>
                                    @endif
                                    
                                <input id="cpf_user" type="text" class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" name="cpf_user" value="{{ $user->cpf_user }}" placeholder="CPF" required autofocus>

                                    @if ($errors->has('cpf_user'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cpf_user') }}</strong>
                                        </span>
                                    @endif

                                <input id="rg_user" type="text" class="form-control" OnKeyPress="formatar('##.###.###-##', this)" maxlength="12" name="rg_user" value="{{ $user->rg_user }}" placeholder="RG" required>

                                    @if ($errors->has('rg_user'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rg_user') }}</strong>
                                        </span>
                                    @endif

                                <input id="contato1" type="text" class="form-control" OnKeyPress="formatar('##-####-####', this)" maxlength="12" name="contato1" value="{{ $user->contato1 }}" placeholder="Telefone fixo" required>

                                    @if ($errors->has('contato1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contato1') }}</strong>
                                        </span>
                                    @endif

                                <input id="contato2" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" maxlength="13" name="contato2" value="{{ $user->contato2 }}" placeholder="Celular/WhatsApp" required>

                                    @if ($errors->has('contato2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contato2') }}</strong>
                                        </span>
                                    @endif

                                <div class="col-md-8">
                                <input id="cep" type="text" class="form-control" name="cep" OnKeyPress="formatar('#####-###', this)" maxlength="9" value="{{ $user->cep }}" placeholder="CEP" required autofocus>

                                    @if ($errors->has('cep'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cep') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-4"> <button id="btn_cep" type="button" href="" class="btn btn-primary">Pesquisar CEP</button></div>

                                <input id="end_rua" type="text"  readonly="readonly" class="form-control" name="end_rua" value="{{ $user->end_rua }}" required autofocus>
                    
                                    @if ($errors->has('end_rua'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_rua') }}</strong>
                                        </span>
                                    @endif

                                <input id="end_numero" type="text" class="form-control" name="end_numero" value="{{ $user->end_numero }}" placeholder="Número da Residencia" required autofocus>
                                    @if ($errors->has('end_numero'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_numero') }}</strong>
                                        </span>
                                    @endif

                                <input id="end_bairro" readonly="readonly" type="text" class="form-control" name="end_bairro" value="{{ $user->end_bairro }}" placeholder="Bairro" required autofocus>
                                    @if ($errors->has('end_bairro'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_bairro') }}</strong>
                                        </span>
                                    @endif

                                <input style="margin-left: 0;" readonly="readonly" id="end_cidade" type="text" class="form-control" name="end_cidade" value="{{ $user->end_cidade }}" placeholder="Cidade" required autofocus>
                                    @if ($errors->has('end_cidade'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_cidade') }}</strong>
                                        </span>
                                    @endif

                                <select name="end_estado" class="form-control">
                                    <option value="1">AC</option>
                                    <option value="2">AL</option>
                                    <option value="3">AP</option>
                                    <option value="4">AM</option>
                                    <option value="5">BA</option>
                                    <option value="6">CE</option>
                                    <option value="7">DF</option>
                                    <option value="8">ES</option>
                                    <option value="9">GO</option>
                                    <option value="10">MA</option>
                                    <option value="11">MT</option>
                                    <option value="12">MS</option>
                                    <option value="13">MG</option>
                                    <option value="14">PA</option>
                                    <option value="15">PB</option>
                                    <option value="16">PR</option>
                                    <option value="17">PE</option>
                                    <option value="18">PI</option>
                                    <option value="19">RJ</option>
                                    <option value="20">RN</option>
                                    <option value="21">RS</option>
                                    <option value="22">RO</option>
                                    <option value="23">RR</option>
                                    <option value="24">SC</option>
                                    <option value="25">SP</option>
                                    <option value="26">SE</option>
                                    <option value="27">TO</option>
                                </select>

                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="E-mail" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <!--<input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha" required>-->

                            <input id="anexo_arquivo" type="file" class="form-control" name="anexo_arquivo" value="{{ $user->anexo_arquivo }}" placeholder="Anexar Arquivo">

                                @if ($errors->has('anexo_arquivo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anexo_arquivo') }}</strong>
                                    </span>
                                @endif

                            <input id="foto_user" type="file" class="form-control" name="foto_user" value="{{ $user->foto_user }}" placeholder="Foto do Usuário">

                                @if ($errors->has('foto_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto_user') }}</strong>
                                    </span>
                                @endif
     
                    </fieldset>

                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-style-5">

                        <fieldset>
                            <legend><span class="number">2</span> Informações Adicionais</legend>
                    
                            <input id="nome_responsavel" type="text" class="form-control" name="nome_responsavel" value="{{ $user->nome_responsavel }}" placeholder="Nome do Responsavel" required autofocus>

                            @if ($errors->has('nome_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nome_responsavel') }}</strong>
                                </span>
                            @endif

                        <input id="contato_responsavel" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" maxlength="13" name="contato_responsavel" value="{{ $user->contato_responsavel }}" placeholder="Contato do Responsavel" required autofocus>

                            @if ($errors->has('contato_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contato_responsavel') }}</strong>
                                </span>
                            @endif

                        <input id="email_responsavel" type="email" class="form-control" name="email_responsavel" value="{{ $user->email_responsavel }}"  placeholder="E-mail do Responsavel" required autofocus>

                            @if ($errors->has('email_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email_responsavel') }}</strong>
                                </span>
                            @endif

                        <input id="cpf_responsavel" type="text" class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" name="cpf_responsavel" value="{{ $user->cpf_responsavel }}" placeholder="CPF do Responsavel" required autofocus>

                            @if ($errors->has('cpf_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cpf_responsavel') }}</strong>
                                </span>
                            @endif
                        
                        </fieldset>

                        <input type="submit" value="Salvar Alteração" />

                    </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
