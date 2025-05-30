<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('purchese_product_id');
            $table->bigInteger('product_id');
            $table->string('product_name')->nullable();
            $table->integer('size_id')->nullable();
            $table->string('size')->nullable();
            $table->integer('purchase');
            $table->integer('stock');
            $table->integer('initial_stock');
            $table->integer('total_stock');
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
        Schema::dropIfExists('stocks');
    }
}
