<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sobrenome');
            $table->date('nascimento');
            $table->string('cpf_user', 14)->unique();
            $table->string('rg_user', 12);
            $table->string('contato1', 15);
            $table->string('contato2', 15);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('foto_user');
            $table->string('nome_rua', 200);
            $table->string('num_residencia', 10);
            $table->string('bairro', 100);
            $table->string('cep');
            $table->string('nome_cidade', 100);
            $table->string('sg_estado',3);
            
            $table->string('nome_responsavel', 200);
            $table->string('contato_responsavel');
            $table->string('email_responsavel');
            $table->string('cpf_responsavel', 14);

            $table->integer('id_instituicao')->unsigned();
            $table->foreign('id_instituicao')
                    ->references('id')
                    ->on('instituicaos');

            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
