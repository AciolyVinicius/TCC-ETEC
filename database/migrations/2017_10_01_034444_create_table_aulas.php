<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAulas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome', 80);
            $table->date('dt_aula');
            $table->time('hr_inicio');
            $table->time('hr_final');

            $table->integer('id_cursos_turnos_turmas_disciplinas')->unsigned();
            $table->foreign('id_cursos_turnos_turmas_disciplinas')
                    ->references('id')
                    ->on('cursos_turnos_turmas_disciplinas');

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
