<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Turno;
use App\Models\Turma;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Instituicao;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    
    public function index(){

        if(Auth::user()->can('view_turma'))
        {
            $turma = Turma::all();

            return view('painel.turmas.list', ['turma'=>$turma]);
        }
        else
        {
            abort(404);
        }   
    }

    public function create(){

        if(Auth::user()->can('add_turma'))
        {
            $turno = Turno::all();
            $instituicao = Instituicao::all();
            $curso = Curso::all();
            $disciplina = Disciplina::all();
            return view('painel.turmas.add', ['turno' => $turno, 'instituicao' => $instituicao, 'curso' => $curso, 'disciplina' => $disciplina]);
        }
        else
        {
            abort(404);
        }
    }

    public function store(Request $request){

        $dados = $request->except('id');

        DB::table('turmas')->insert([
            'nome' => $dados['nome'],
            'dt_inicio' => $dados['dt_inicio'],
            'dt_final' => $dados['dt_final'],
            'qt_users' => $dados['qt_users']
        ]);

        return redirect('/painel/turmas/')->with('message', 'Turma criada com sucesso!');

    }

    public function show($id){

        $turma = Turma::find($id);

        return view('painel.turmas.show', ['turma'=>$turma]);
    }

    public function edit($id){

        $turma = Turma::find($id);

        return view('painel.turmas.edit', ['turma'=>$turma]);

    }

    public function update(Request $request, $id){

        $edit = Turma::findOrFail($id);
        $edit->nome = $request->nome;
        $edit->dt_inicio = $request->dt_inicio;
        $edit->dt_final = $request->dt_final;
        $edit->qt_users = $request->qt_users;

        $edit->save();

        return redirect('/painel/turmas')->with('message', 'Turma alterada com Sucesso!');      
        
    }

    public function destroy($id){

        $turma = Turma::find($id)->delete();

        return redirect('/painel/turmas')->with('message', 'Turma desativada com Sucesso!');

    }
}