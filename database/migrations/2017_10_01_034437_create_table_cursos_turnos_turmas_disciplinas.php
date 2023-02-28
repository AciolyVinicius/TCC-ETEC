<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCursosTurnosTurmasDisciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_turnos_turmas_disciplinas', function (Blueprint $table){
            $table->increments('id');
            
            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')
                    ->references('id')
                    ->on('cursos');

            $table->integer('id_disciplina')->unsigned();
            $table->foreign('id_disciplina')
                    ->references('id')
                    ->on('disciplinas');

            $table->integer('id_turnos')->unsigned();
            $table->foreign('id_turnos')
                    ->references('id')
                    ->on('turnos');

            $table->integer('id_turma')->unsigned();
            $table->foreign('id_turma')
                    ->references('id')
                    ->on('turmas');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_turnos_turmas_disciplinas');
    }
}
