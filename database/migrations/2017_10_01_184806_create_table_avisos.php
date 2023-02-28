<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAvisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avisos', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 100);
            $table->longText('aviso');
            $table->date('dt_aviso');
            $table->binary('anexo_aviso');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                    ->references('id')
                    ->on('users');

            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')
                    ->references('id')
                    ->on('cursos');

            $table->integer('id_turma')->unsigned();
            $table->foreign('id_turma')
                    ->references('id')
                    ->on('turmas');
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
        Schema::dropIfExists('avisos');
    }
}
