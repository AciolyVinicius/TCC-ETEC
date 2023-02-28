@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Material
                    <a href="{{url('materiais')}}" class="pull-right">Listagem dos Materiais</a>
                </div>

                    @if(Auth::user()->can('add_material'))

                    <div class="panel-body">
                        
                        <h3>Informações do Novo Material</h3><br>
                        
                        <form class="form-horizontal" method="POST" action="/materiais/edit/{{$material->id}}">                        
                            {{ csrf_field() }}
                            
                            <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                                <label for="nome" class="col-md-4 control-label">Nome do Material</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ $material->nome }}" required autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                                <label for="descricao" class="col-md-4 control-label">Descrição do Material</label>

                                <div class="col-md-6">
                                    <textarea id="descricao" type="text" class="form-control" name="descricao" value="" required autofocus>
                                    	{{ $material->descricao }}
                                    </textarea>

                                    @if ($errors->has('descricao'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('descricao') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                         	<div class="form-group{{ $errors->has('anexar_material') ? ' has-error' : '' }}">
                                <label for="anexar_material" class="col-md-4 control-label">Anexar o Material</label>

                                <div class="col-md-6">
                                    <input id="anexar_material" type="file" class="form-control" name="anexar_material" value="{{ $material->anexar_material }}" required autofocus>

                                    @if ($errors->has('anexar_material'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('anexar_material') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Editar Material
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
