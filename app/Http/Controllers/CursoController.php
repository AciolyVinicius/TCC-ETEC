<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\Curso;
use App\Models\Instituicao;
use Illuminate\Http\Request;


class CursoController extends Controller
{
    public function index(){

        if(Auth::user()->can('view_curso'))
        {
            $curso = Curso::all();

            return view('painel.cursos.list', ['curso'=>$curso]);
        }
        else
        {
            abort(404);
        }   
    }

    public function create(){

        if(Auth::user()->can('add_curso'))
        {
            $instituicao = Instituicao::all();
            return view('painel.cursos.add', ['instituicao' => $instituicao]);
        }
        else
        {
            abort(404);
        }
    }

    public function store(Request $request){

        $dados = $request->except('id');

        DB::table('cursos')->insert([
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao'],
            'cargahoraria_curso' => $dados['cargahoraria_curso'],
            'id_instituicao' => $dados['id_instituicao']
        ]);

        return redirect('/painel/cursos/')->with('message', 'Curso criado com sucesso!');

    }

    public function show($id){

        $curso = Curso::find($id);

        return view('painel.cursos.show', ['curso'=>$curso]);
    }

    public function edit($id){

        $curso = Curso::find($id);

        return view('painel.cursos.edit', ['curso'=>$curso]);

    }

    public function update(Request $request, $id){

        $edit = Curso::findOrFail($id);
        $edit->nome = $request->nome;
        $edit->descricao = $request->descricao;
        $edit->cargahoraria_curso = $request->cargahoraria_curso;

        $edit->save();

        return redirect('/painel/cursos')->with('message', 'Curso alterado com Sucesso!');      
        
    }

    public function destroy($id){

        $curso = Curso::find($id)->delete();

        return redirect('/painel/cursos')->with('message', 'Curso desativado com Sucesso!');

    }
}