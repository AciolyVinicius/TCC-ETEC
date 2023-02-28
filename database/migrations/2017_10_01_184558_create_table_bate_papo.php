<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBatePapo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bate_papo', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 100);
            $table->date('dt_inicio_bate_papo');
            $table->date('dt_fim_bate_papo');
            $table->boolean('limpar_historico');

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
        Schema::dropIfExists('bate_papo');
    }
}
