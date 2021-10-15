<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sexo');
            $table->string('telefone');
            $table->string('tipo');
            $table->string('local');
            $table->string('cidade');
            $table->string('uf');
            $table->string('manejo');
            $table->string('certificacao');
            $table->string('selo');
            $table->integer('fair_id')
                ->unsigned();
            $table->foreign('fair_id')
                ->references('id')
                ->on('fairs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('marketers');
    }
}
