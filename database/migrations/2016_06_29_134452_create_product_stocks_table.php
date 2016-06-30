<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_id')->unsigned();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->string('product_name');
            $table->string('product_description');
            $table->integer('quantity_in_stock');
            $table->float('price');
            $table->float('discounted_price')->nullable();
            $table->boolean('tax')->default(0);
            $table->float('tax_amount')->nullable();
            $table->boolean('coupon_enabled')->default(0);
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
        Schema::drop('product_stocks');
    }
}
