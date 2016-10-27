<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            // add anonymous order later
            $table->integer('anonymous_order')->unsigned()->nullable();
            $table->integer('open_order_id')->unsigned();
            $table->foreign('open_order_id')->references('id')->on('open_orders')->onDelete('cascade');
            $table->string('buy_list');

            /* buyers */
            $table->integer('anonymous_buyer_id')->unsigned()->nullable();
            // $table->foreign('anonymous_buyer_id')->references('id')->on('anonymous_buyer');
            $table->integer('buyer_id')->unsigned()->nullable();
            $table->foreign('buyer_id')->references('id')->on('users');

            // add coupons table foreign key later
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->float('discount')->default(0);
            $table->float('shipping')->default(0);
            $table->float('tax')->nullable();
            $table->float('grand_total');
            $table->boolean('confirmed')->default(false);
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
        Schema::drop('orders');
    }
}
