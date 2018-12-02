<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCalendario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendario', function (Blueprint $table) {
                        $table->integer('ej_id')->unsigned();// Id da tabela categories
            $table->foreign('ej_id')->references('id')->on('ej'); // Define o campo como chave extrangeira (foreign key)

            $table->increments('id');
            $table->string('titulo',80);
            $table->dateTime('inicio');
            $table->dateTime('fim');
            $table->longText('descricao');
            $table->boolean('diainteiro');
            $table->string('background',7);
            
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
        Schema::dropIfExists('calendario');
    }
}
