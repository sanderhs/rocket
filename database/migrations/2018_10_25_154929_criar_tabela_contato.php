<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato', function (Blueprint $table) {
            $table->integer('nucleo_id')->unsigned();// Id da tabela categories
            $table->foreign('nucleo_id')->references('id')->on('nucleo'); // Define o campo como chave extrangeira (foreign key)
            $table->increments('id');
            $table->string('nome',80);
            $table->string('cargo',100);
            $table->string('email',80);
            $table->string('telefone',10);
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
        Schema::dropIfExists('contato');
    }
}
