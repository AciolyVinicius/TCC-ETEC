<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMensagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table){
            $table->increments('id');
            $table->string('conteudo_mensagem');
            $table->dateTime('envio_mensagem');

            $table->integer('id_bate_papo')->unsigned();
            $table->foreign('id_bate_papo')
                    ->references('id')
                    ->on('bate_papo');
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
        Schema::dropIfExists('mensagens');
    }
}
