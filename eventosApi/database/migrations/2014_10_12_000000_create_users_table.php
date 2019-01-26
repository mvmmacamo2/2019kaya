<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('apelido', 20)->nullable();
            $table->string('foto')->default('http://localhost:8000/imagens/avatar/Default-avatar.jpg');
            $table->date('data_nascimento')->nullable();
            $table->string('bi')->nullable();
            $table->string('celular')->nullable();
            $table->string('endereco')->nullable();
            $table->string('estado')->nullable();
            $table->string('estado_perfil')->nullable();
            $table->integer('nuit')->nullable();
            $table->string('email')->unique();
            $table->string('uuid')->unique()->nullable();
            $table->string('nivel')->default('normal');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
