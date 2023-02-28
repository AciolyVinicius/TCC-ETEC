<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAvaliacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 80);
            $table->string('descricao');
            $table->date('dt_avaliacao');
            $table->string('nota', 5);
            $table->integer('peso_nota');

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
        Schema::dropIfExists('avaliacoes');
    }
}
