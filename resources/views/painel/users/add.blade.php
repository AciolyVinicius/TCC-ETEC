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
                    <div class="col-md-10"><h4>Adicionar Usuario</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/users')}}" class="pull-right btn btn-default">Listagem de Usuários</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                <div class="col-md-6">
                <div class="form-style-5">
                    <form class="form-horizontal" method="POST" action="/painel/users/salvar" enctype="multipart/form-data">                        
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

                            <div class="form-group{{ $errors->has('id_instituicao') ? ' has-error' : '' }}">
                                <label for="id_instituicao" class="col-md-4 control-label" style="color: black;">Instituicao *</label>

                                <div class="col-md-6">
                                    <select name="id_instituicao" class="form-control">
                                        @foreach($instituicao as $instituicao)
                                        <option value="{{$instituicao->id}}">{{$instituicao->nome_fantasia}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('curso') ? ' has-error' : '' }}">
                                <label for="curso" class="col-md-4 control-label" style="color: black;">Curso *</label>

                                <div class="col-md-6">
                                    <select name="curso" class="form-control">
                                        @foreach($curso as $curso)
                                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <input id="name" type="text" class="field1" name="name" value="{{ old('name') }}" placeholder="Nome *" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                <input id="sobrenome" type="text" class="form-control" name="sobrenome" value="{{ old('sobrenome') }}" placeholder="Sobrenome do Usuário" required autofocus>

                                    @if ($errors->has('sobrenome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sobrenome') }}</strong>
                                        </span>
                                    @endif

                                <input id="nascimento" type="date" class="form-control" name="nascimento" value="{{ old('nascimento') }}" required autofocus>

                                    @if ($errors->has('nascimento'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nascimento') }}</strong>
                                        </span>
                                    @endif
                                    
                                <input id="cpf_user" type="text" class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" name="cpf_user" value="{{ old('cpf_user') }}" placeholder="CPF" required autofocus>

                                    @if ($errors->has('cpf_user'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cpf_user') }}</strong>
                                        </span>
                                    @endif

                                <input id="rg_user" type="text" class="form-control" OnKeyPress="formatar('##.###.###-##', this)" maxlength="12" name="rg_user" value="{{ old('rg_user') }}" placeholder="RG" required>

                                    @if ($errors->has('rg_user'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rg_user') }}</strong>
                                        </span>
                                    @endif

                                <input id="contato1" type="text" class="form-control" OnKeyPress="formatar('##-####-####', this)" maxlength="12" name="contato1" value="{{ old('contato1') }}" placeholder="Telefone fixo" required>

                                    @if ($errors->has('contato1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contato1') }}</strong>
                                        </span>
                                    @endif

                                <input id="contato2" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" maxlength="13" name="contato2" value="{{ old('contato2') }}" placeholder="Celular/WhatsApp" required>

                                    @if ($errors->has('contato2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contato2') }}</strong>
                                        </span>
                                    @endif

                                <div class="col-md-8">
                                <input id="cep" type="text" class="form-control" name="cep" OnKeyPress="formatar('#####-###', this)" maxlength="9" value="{{ old('cep') }}" placeholder="CEP" required autofocus>

                                    @if ($errors->has('cep'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cep') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-4"> <button id="btn_cep" type="button" href="" class="btn btn-primary">Pesquisar CEP</button></div>

                                <input id="end_rua" type="text"  readonly="readonly" class="form-control" name="end_rua" value="{{ old('end_rua') }}" placeholder="Endereço" required autofocus>
                    
                                    @if ($errors->has('end_rua'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_rua') }}</strong>
                                        </span>
                                    @endif

                                <input id="end_numero" type="text" class="form-control" name="end_numero" value="{{ old('end_numero') }}" placeholder="Número da Residencia" required autofocus>
                                    @if ($errors->has('end_numero'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_numero') }}</strong>
                                        </span>
                                    @endif

                                <input id="end_bairro" readonly="readonly" type="text" class="form-control" name="end_bairro" value="{{ old('end_bairro') }}" placeholder="Bairro" required autofocus>
                                    @if ($errors->has('end_bairro'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_bairro') }}</strong>
                                        </span>
                                    @endif

                                <input style="margin-left: 0;" readonly="readonly" id="end_cidade" type="text" class="form-control" name="end_cidade" value="{{ old('end_cidade') }}" placeholder="Cidade" required autofocus>
                                    @if ($errors->has('end_cidade'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_cidade') }}</strong>
                                        </span>
                                    @endif

                                <select name="end_estado" class="form-control">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha" required>

                            <input id="anexo_arquivo" type="file" class="form-control" name="anexo_arquivo" value="{{ old('anexo_arquivo') }}" placeholder="Anexar Arquivo">

                                @if ($errors->has('anexo_arquivo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anexo_arquivo') }}</strong>
                                    </span>
                                @endif

                            <input id="foto_user" type="file" class="form-control" name="foto_user" value="{{ old('foto_user') }}" placeholder="Foto do Usuário">

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
                    
                            <input id="nome_responsavel" type="text" class="form-control" name="nome_responsavel" value="{{ old('nome_responsavel') }}" placeholder="Nome do Responsavel" required autofocus>

                            @if ($errors->has('nome_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nome_responsavel') }}</strong>
                                </span>
                            @endif

                        <input id="contato_responsavel" type="text" class="form-control" OnKeyPress="formatar('##-#####-####', this)" maxlength="13" name="contato_responsavel" value="{{ old('contato_responsavel') }}" placeholder="Contato do Responsavel" required autofocus>

                            @if ($errors->has('contato_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contato_responsavel') }}</strong>
                                </span>
                            @endif

                        <input id="email_responsavel" type="email" class="form-control" name="email_responsavel" value="{{ old('email_responsavel') }}"  placeholder="E-mail do Responsavel" required autofocus>

                            @if ($errors->has('email_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email_responsavel') }}</strong>
                                </span>
                            @endif

                        <input id="cpf_responsavel" type="text" class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" name="cpf_responsavel" value="{{ old('cpf_responsavel') }}" placeholder="CPF do Responsavel" required autofocus>

                            @if ($errors->has('cpf_responsavel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cpf_responsavel') }}</strong>
                                </span>
                            @endif
                        
                        </fieldset>

                        <input type="submit" value="Cadastrar" />

                    </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
