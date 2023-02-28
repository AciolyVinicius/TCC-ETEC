<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFrequencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencias', function(Blueprint $table){
            $table->increments('id');
            $table->date('dt_frequencia');
            $table->boolean('status');
            $table->string('justificar');
            $table->binary('anexo_justificar');

            $table->integer('id_aulas')->unsigned();
            $table->foreign('id_aulas')
                    ->references('id')
                    ->on('aulas');

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
        Schema::dropIfExists('frequencias');
    }
}
