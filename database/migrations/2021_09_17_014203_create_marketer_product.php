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
            $table->foreignId('marketer_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('number');
            $table->string('unit', 15);
            $table->double('amount', 8, 2);
            $table->string('image', 250);
            $table->string('months', 250);
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
