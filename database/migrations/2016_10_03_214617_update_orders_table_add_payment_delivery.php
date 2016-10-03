<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersTableAddPaymentDelivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('delivery_option_id')->unsigned();
            $table->foreign('delivery_option_id')->references('id')->on('delivery_options');
            $table->integer('payment_option_id')->unsigned();
            $table->foreign('payment_option_id')->references('id')->on('payment_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['delivery_option_id']);
            $table->dropColumn('delivery_option_id');
            $table->dropForeign(['payment_option_id']);
            $table->dropColumn('payment_option_id');
        });
    }
}
