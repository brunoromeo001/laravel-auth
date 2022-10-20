<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('test_usuarios', function (Blueprint $table) {
        $table->increments('id_usuario');
        $table->string('nome');
        $table->string('usuario');
        $table->string('senha');
        $table->string('matricula');
        $table->string('email')->unique();
        $table->string('segmento');
        $table->string('cargo');
        $table->string('codgerente');
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
        Schema::dropIfExists('test_usuarios');
    }
}
