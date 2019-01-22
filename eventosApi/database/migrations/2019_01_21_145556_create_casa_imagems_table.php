<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasaImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casa_imagems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagem');
            $table->string('descricao');
            $table->integer('casa_id')->unsigned();
            $table->foreign('casa_id')->references('id')->on('casa_eventos');
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
        Schema::dropIfExists('casa_imagems');
    }
}
