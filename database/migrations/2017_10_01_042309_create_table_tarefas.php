<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('descricao');
            $table->longText('tarefa');
            $table->date('dt_inicio');
            $table->date('dt_final');

            $table->integer('id_curso_user')->unsigned();
            $table->foreign('id_curso_user')
                    ->references('id')
                    ->on('curso_user');
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
        Schema::dropIfExists('tarefas');
    }
}
