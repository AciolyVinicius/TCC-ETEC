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
                    <div class="col-md-10"><h4>Editar Turno</h4></div>
                    <div class="col-md-2"><a href="{{url('/painel/cursos')}}" class="pull-right btn btn-default">Listagem dos Turnos</a></div>
                </div>
            </div>

            <div class="panel-body" style="background-color: #F0FFFF">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-style-5">

                            <form class="form-horizontal" method="POST" action="/painel/turnos/edit/{{$turno->id}}">                        
                            {{ csrf_field() }}
                            
                                <fieldset>
                                    <legend><span class="number">1</span> Informações do Turno</legend>

                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ $turno->nome }}" placeholder="Nome *" required  autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif

                                    <textarea id="descricao" type="text" class="form-control" name="descricao" rows="9" value="" placeholder="Descrição do Curso *" required autofocus>{{ $turno->descricao }}</textarea>

                                    @if ($errors->has('descricao'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('descricao') }}</strong>
                                        </span>
                                    @endif

                                    <input id="hr_inicio" type="text" class="form-control" name="hr_inicio" maxlength="5" OnKeyPress="formatar('##:##', this)" value="{{ $turno->hr_inicio }}" placeholder="Horario de Inicio *" required autofocus>

                                    @if ($errors->has('hr_inicio'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('hr_inicio') }}</strong>
                                        </span>
                                    @endif

                                    <input id="hr_final" type="text" class="form-control" name="hr_final" maxlength="5" OnKeyPress="formatar('##:##', this)" value="{{ $turno->hr_final }}" placeholder="Horario de Termino *" required autofocus>

                                    @if ($errors->has('hr_final'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('hr_final') }}</strong>
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
</div>


@endsection
