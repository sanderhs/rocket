<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ej', function (Blueprint $table) {
            $table->integer('nucleo_id')->unsigned();// Id da tabela categories
            $table->foreign('nucleo_id')->references('id')->on('nucleo'); // Define o campo como chave extrangeira (foreign key)



            $table->increments('id');
            $table->string('nome',80);
            $table->longText('cursos');
            $table->integer('numeromembros');
            $table->longText('descricao');
            $table->string('facebook',80);
            $table->string('instragam',80);
            $table->string('avatar',200);
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
        Schema::dropIfExists('ej');
    }
}
