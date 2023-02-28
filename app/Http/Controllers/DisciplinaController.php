<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\Instituicao;
use App\Models\Curso;
use App\Models\Disciplina;
use Illuminate\Http\Request;


class DisciplinaController extends Controller
{   

    public function index(){

    	if(Auth::user()->can('view_disciplina'))
    	{
    		$disciplina = Disciplina::all();

    		return view('painel.disciplinas.list', ['disciplinas'=>$disciplina]);
    	}
    	else
    	{
    		abort(404);
    	}	
    }

    public function create(){

    	if(Auth::user()->can('add_disciplina'))
        {
            $instituicao = Instituicao::all();
            $curso = Curso::all();
            return view('painel.disciplinas.add', ['instituicao' => $instituicao, 'curso' => $curso]);
        }
        else
        {
            abort(404);
        }
    }

    public function store(Request $request){

    	$dados = $request->except('id');

    	DB::table('disciplinas')->insert([
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao'],
            'ementa' => $dados['ementa'],
			'cargahoraria_disciplina' => $dados['cargahoraria_disciplina']
        ]);

    	return redirect('/painel/disciplinas/')->with('message', 'Disciplina criada com sucesso!');

    }

    public function show($id){

    	$disciplina = Disciplina::find($id);

		return view('painel.disciplinas.show', ['disciplina'=>$disciplina]);
    }

    public function edit($id){

    	$disciplina = Disciplina::find($id);

    	return view('painel.disciplinas.edit', ['disciplina'=>$disciplina]);

    }

    public function update(Request $request, $id){

    	$edit = Disciplina::findOrFail($id);
    	$edit->nome = $request->nome;
    	$edit->descricao = $request->descricao;
    	$edit->ementa = $request->ementa;
    	$edit->cargahoraria_disciplina = $request->cargahoraria_disciplina;

    	$edit->save();

		return redirect('/painel/disciplinas/')->with('message', 'Disciplina alterada com Sucesso!');    	
        
    }

    public function destroy($id){

    	$disciplina = Disciplina::find($id)->delete();

    	return redirect('/painel/disciplinas/')->with('message', 'Disciplina desativada com Sucesso!');

    }
}






