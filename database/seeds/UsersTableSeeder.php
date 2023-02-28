<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituicaos')->insert([
            'nome' => 'escola padrao',
            'nome_fantasia' => 'escola padrao fantasia',
            'endereco' => 'endereco escola padrao',
            'categoria' => 'fundamental',
            'cnpj' => '1234567890000',
            'contato1' => '(13) 12345678',
            'contato2' => '(15) 12345678',
            'email' => 'escola_padrao@email.com'
        ]);

        DB::table('users')->insert([
        	'name' => 'Administrador',
        	'sobrenome' => 'sobrenome Admin',
        	'nascimento' => '1994/12/14',
        	'cpf_user' => '12345678900',
        	'rg_user' => '123456789',
        	'contato1' => '(13) 34323133',
        	'contato2' => '(13) 987654321',
        	'email' => 'admin@email.com',
        	'password' => bcrypt('admin123'),
        	'nome_responsavel' => 'Admin Pai',
        	'contato_responsavel' => '(13) 988181146',
        	'email_responsavel' => 'adminpai@email.com',
        	'cpf_responsavel' => '00987654321',
            'nome_rua' => 'xxx',
            'num_residencia' => '123',
            'bairro' => 'bairro',
            'cep' => '11700-700',
            'nome_cidade' => 'Praia Grande',
            'sg_estado' => 'SP',
            'id_instituicao' => 1
        ]);


        DB::table('role_user')->insert([
        	'user_id' => 1,
        	'role_id' => 1
		]);

    }
}
