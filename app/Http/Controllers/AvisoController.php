<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\Aviso;
use App\Models\Instituicao;
use Illuminate\Http\Request;

class AvisoController extends Controller
{
    public function create(){


    	return view('painel.avisos.add');
    }

    public function store(){
    	
        try{

            $dados = $request->except('id');

            DB::table('avisos')->insert([
                'nome' => $dados['nome'],
                'aviso' => $dados['aviso'],
                'dt_aviso' => $dados['dt_aviso'],
                'anexo_aviso' => $dados['anexo_aviso']
            ]);

            return redirect('/home')->with('message', 'Aviso adicionado com sucesso!');

        }catch(Exception $erro){

        }

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
