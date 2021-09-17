<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketerProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketer_product', function (Blueprint $table) {
            $table->integer('quantidade');
            $table->string('unidade');
            $table->double('preco', 8, 2);
            $table->string('meses');
            $table->integer('marketer_id')
                ->unsigned();
            $table->foreign('marketer_id')
                ->references('id')
                ->on('marketers')
                ->onUpdate('cascade');
            $table->integer('product_id')
                ->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('marketer_product');
    }
}
