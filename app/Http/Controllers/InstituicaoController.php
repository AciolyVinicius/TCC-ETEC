<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\Instituicao;
use Illuminate\Http\Request;


class InstituicaoController extends Controller
{
    public function index(){

    	if(Auth::user()->can('view_instituicao'))
    	{
    		$instituicao = Instituicao::all();

    		return view('painel.instituicoes.list', ['instituicao'=>$instituicao]);
    	}
    	else
    	{
    		abort(404);
    	}	
    }

    public function create(){

    	if(Auth::user()->can('add_instituicao'))
        {
            return view('painel.instituicoes.add');
        }
        else
        {
            abort(404);
        }
    }

    public function store(Request $request){

    	$dados = $request->except('id');

    	DB::table('instituicaos')->insert([
            'nome' => $dados['nome'],
            'nome_fantasia' => $dados['nome_fantasia'],
            'endereco' => $dados['endereco'],
            'categoria' => $dados['categoria'],
			'cnpj' => $dados['cnpj'],
			'contato1' => $dados['contato1'],
			'contato2' => $dados['contato2'],
			'email' => $dados['email'],
        ]);

    	return redirect('/painel/instituicoes/')->with('message', 'Instituição cadastrada com sucesso!');

    }

    public function show($id){

    	$instituicao = Instituicao::find($id);

		return view('painel.instituicoes.show', ['instituicao'=>$instituicao]);
    }

    public function edit($id){

    	$instituicao = Instituicao::find($id);

    	return view('painel.instituicoes.edit', ['instituicao'=>$instituicao]);

    }

    public function update(Request $request, $id){

    	$edit = Instituicao::findOrFail($id);
    	$edit->nome = $request->nome;
    	$edit->nome_fantasia = $request->nome_fantasia;
    	$edit->endereco = $request->endereco;
    	$edit->categoria = $request->categoria;
    	$edit->cnpj = $request->cnpj;
    	$edit->contato1 = $request->contato1;
    	$edit->contato2 = $request->contato2;
    	$edit->email = $request->email;

    	$edit->save();

		return redirect('/painel/instituicoes/')->with('message', 'Instituição alterada com Sucesso!');    	
        
    }

    public function destroy($id){

    	$instituicao = Instituicao::find($id)->delete();

    	return redirect('/painel/instituicoes/')->with('message', 'Instituição desativada com Sucesso!');

    }
}