<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnotacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anotacoes', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 80);
            $table->string('descricao');
            $table->longText('anotacao');
            $table->date('dt_anotacao');

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
        Schema::dropIfExists('anotacoes');
    }
}
