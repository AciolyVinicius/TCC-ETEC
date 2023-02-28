<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{

    public function index(){

        if(Auth::user()->can('view_material'))
        {
            $material = Material::all();

            return view('painel.materiais.list', ['material'=>$material]);
        }
        else
        {
            abort(404);
        }   
    }

    public function create(){

        if(Auth::user()->can('add_material'))
        {
            return view('painel.materiais.add');
        }
        else
        {
            abort(404);
        }
    }

    public function store(Request $request){

        $dados = $request->except('id');

        DB::table('materials')->insert([
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao'],
            //'anexo_material' => $dados['anexo_material']
        ]);

        return redirect('/painel/materiais/')->with('message', 'Material cadastrado com sucesso!');

    }

    public function show($id){

        $material = Material::find($id);

        return view('painel.materiais.show', ['material'=>$material]);
    }

    public function edit($id){

        $material = Material::find($id);

        return view('painel.materiais.edit', ['material'=>$material]);

    }

    public function update(Request $request, $id){

        $edit = Material::findOrFail($id);
        $edit->nome = $request->nome;
        $edit->descricao = $request->descricao;
        $edit->anexo_material = $request->anexo_material;

        $edit->save();

        return redirect('/painel/materiais')->with('message', 'Material alterado com Sucesso!');      
        
    }

    public function destroy($id){

        $material = Material::find($id)->delete();

        return redirect('/painel/materiais')->with('message', 'Material excluido com Sucesso!');

    }
}