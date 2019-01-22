<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasaEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casa_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('casa');
            $table->string('imagem');
            $table->double('preco');
            $table->string('endereco');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->string('celular');
            $table->string('nr_convidado');
            $table->string('descricao')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('casa_eventos');
    }
}
