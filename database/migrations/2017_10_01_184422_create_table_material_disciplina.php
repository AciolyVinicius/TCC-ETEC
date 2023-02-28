<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMaterialDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_disciplina', function (Blueprint $table){
            $table->increments('id');

            $table->integer('id_materiais')->unsigned();
            $table->foreign('id_materiais')
                    ->references('id')
                    ->on('materials');

            $table->integer('id_cursos_turnos_turmas_disciplinas')->unsigned();
            $table->foreign('id_cursos_turnos_turmas_disciplinas')
                    ->references('id')
                    ->on('cursos_turnos_turmas_disciplinas');
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
        Schema::dropIfExists('material_disciplina');
    }
}
