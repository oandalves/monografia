<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fairs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
            $table->string('dia');
            $table->string('horario');
            $table->string('periodicidade');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('local');
            $table->string('cidade');
            $table->string('uf');
            $table->string('telefone');
            $table->string('email');
            $table->string('link');
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
        Schema::dropIfExists('fairs');
    }
}