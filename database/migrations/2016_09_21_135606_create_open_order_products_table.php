<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_order_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('open_order_id')->unsigned();
            $table->foreign('open_order_id')->references('id')->on('open_orders');
            $table->integer('product_stock_id')->unsigned();
            $table->foreign('product_stock_id')->references('id')->on('product_stocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('open_order_products');
    }
}
