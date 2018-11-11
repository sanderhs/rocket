<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaNucleo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nucleo', function (Blueprint $table) {



            $table->increments('id');
            $table->longText('cultura');
            $table->longText('movimento');
            $table->longText('valores');
            $table->string('facebook',80);
            $table->string('instagram',80);
            $table->string('nome',80);
            $table->string('avatar',200);
            $table->string('codigo',10)->unique();
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
        Schema::dropIfExists('nucleo');
    }
}
