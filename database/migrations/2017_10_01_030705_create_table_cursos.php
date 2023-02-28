<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 150);
            $table->mediumText('descricao');
            $table->integer('cargahoraria_curso');

            $table->integer('id_instituicao')->unsigned();
            $table->foreign('id_instituicao')
                    ->references('id')
                    ->on('instituicaos');

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
        Schema::dropIfExists('cursos');
    }
}
