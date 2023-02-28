<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{

    public function index(){

        if(Auth::user()->can('view_turno'))
        {
            $turno = Turno::all();

            return view('painel.turnos.list', ['turno'=>$turno]);
        }
        else
        {
            abort(404);
        }   
    }

    public function create(){

        if(Auth::user()->can('add_turno'))
        {
            return view('painel.turnos.add');
        }
        else
        {
            abort(404);
        }
    }

    public function store(Request $request){

        $dados = $request->except('id');

        DB::table('turnos')->insert([
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao'],
            'hr_inicio' => $dados['hr_inicio'],
            'hr_final' => $dados['hr_final']
        ]);

        return redirect('/painel/turnos/')->with('message', 'Turno criado com sucesso!');

    }

    public function show($id){

        $turno = Turno::find($id);

        return view('painel.turnos.show', ['turno'=>$turno]);
    }

    public function edit($id){

        $turno = Turno::find($id);

        return view('painel.turnos.edit', ['turno'=>$turno]);

    }

    public function update(Request $request, $id){

        $edit = Turno::findOrFail($id);
        $edit->nome = $request->nome;
        $edit->descricao = $request->descricao;
        $edit->hr_inicio = $request->hr_inicio;
        $edit->hr_final = $request->hr_final;

        $edit->save();

        return redirect('/painel/turnos')->with('message', 'Turno alterado com Sucesso!');      
        
    }

    public function destroy($id){

        $turno = Turno::find($id)->delete();

        return redirect('/painel/turnos')->with('message', 'Turno excluido com Sucesso!');

    }
}