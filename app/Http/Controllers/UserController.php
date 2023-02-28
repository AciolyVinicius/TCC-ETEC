<?php

namespace App\Http\Controllers;

use DB;
use Auth;

use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Endereco;
use App\Models\User;
use App\Models\Curso;
use App\Models\Instituicao;
use App\Models\Role;
use App\Models\Permisson;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function perfil()
    {
        if(Auth::user()->can('view_perfil'))
        {
            $user = Auth::user();
            $instituicao = Instituicao::find(1);
            $curso = Curso::find(1);

            return view('painel.perfil', ['user' => $user, 'instituicao' => $instituicao, 'curso' => $curso]);
        }
        else
        {
            abort(404);
        }
    }

    
    public function index()
    {
        if(Auth::user()->can('view_user'))
        {
            $user = User::with('roles')->get();

            return view('painel.users.list', ['users'=>$user]);
        }
        else
        {
            abort(404);
        }

    }

    
    public function create()
    {
        if(Auth::user()->can('add_user'))
        {
            $instituicao = Instituicao::all();
            $curso = Curso::all();
            return view('painel.users.add', ['instituicao' => $instituicao, 'curso' => $curso]);
        }
        else
        {
            abort(404);
        }
    }

    
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();

            $dados = $request->except('id');

            $user_id = DB::table('users')->insertGetId([
                'name' => $dados['name'],
                'sobrenome' => $dados['sobrenome'],
                'nascimento' => $dados['nascimento'],
                'cpf_user' => $dados['cpf_user'],
                'rg_user' => $dados['rg_user'],
                'contato1' => $dados['contato1'],
                'contato2' => $dados['contato2'],
                'email' => $dados['email'],
                'password' => bcrypt($dados['password']),
                'foto_user' => $request->file('foto_user'),
                'nome_responsavel' => $dados['nome_responsavel'],
                'contato_responsavel' => $dados['contato_responsavel'],
                'email_responsavel' => $dados['email_responsavel'],
                'cpf_responsavel' => $dados['cpf_responsavel'],
                'nome_rua' => $dados['end_rua'],
                'num_residencia' => $dados['end_numero'],
                'bairro' => $dados['end_bairro'],
                'cep' => $dados['cep'],
                'nome_cidade' => $dados['end_cidade'],
                'sg_estado' => $dados['end_estado'],
                'id_instituicao' => $dados['id_instituicao']
            ]);

            $user = User::find($user_id);
            $role = Role::find($dados['role']);
            $user->attachRole($role);

            
            $user->save();

            DB::commit();

            return redirect('/painel/users/')->with('message', 'Usuário cadastrado com sucesso!');
    
    }catch(Exception $erro){
        return redirect('/painel/users/')->with('message2', 'Erro ao cadastrar usuário!');
        DB::rollBack();
    }



        //para encriptar a senha e poder cadastrar e fazer login
        /*
        if(array_key_exists('password', $dados))
        {
            $dados['password'] = bcrypt($dados['password']);
        }
        */
    }

    
    public function show($id)
    {
        $user = User::find($id);

        return view('painel.users.show', ['user'=>$user]);
    }

    
    public function edit($id)
    {
        if(Auth::user()->can('edit_user'))
        {
            $user = User::with('endereco.cidade.estado')->findOrFail($id);
            dd($user);

            return view('painel.users.edit', ['user'=>$user]);
        }
        else
        {
            abort(404);
        }
    }

    
    public function update(Request $request, $id)
    {
        try{

            DB::beginTransaction();

                $edit = User::findOrFail($id);
                $edit->name = $request->name;
                $edit->sobrenome = $request->sobrenome;
                $edit->nascimento = $request->nascimento;
                $edit->cpf_user = $request->cpf_user;
                $edit->rg_user = $request->rg_user;
                $edit->contato1 = $request->contato1;
                $edit->contato2 = $request->contato2;
                $edit->email = $request->email;
                $edit->foto_user = $request->foto_user;
                $edit->nome_responsavel = $request->nome_responsavel;
                $edit->contato_responsavel = $request->contato_responsavel;
                $edit->email_responsavel = $request->email_responsavel;
                $edit->cpf_responsavel = $request->cpf_responsavel;

                $user = User::find($request->get('id'));
                $user->detachRoles($user->roles);
                $role = Role::find($request->role);
                $user->attachRole($role);

                $edit->save();

                DB::commit();

                return redirect('/painel/users')->with('message', 'Usuário alterado com Sucesso!');
        }
        catch(Exception $erro){
            
            return redirect('/painel/users/')->with('message', 'Erro ao alterar usuário!');
            DB::rollBack();
        
        }

    }

    
    public function destroy($id)
    {
        if(Auth::user()->can('desativar_user'))
        {
            $user = User::find($id)->delete();

            return redirect('/painel/users/');
        }
        else
        {
            abort(404);
        } 
    }
}
