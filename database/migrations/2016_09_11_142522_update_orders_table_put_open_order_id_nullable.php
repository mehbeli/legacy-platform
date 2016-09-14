<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersTablePutOpenOrderIdNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['open_order_id']);
            $table->dropColumn('open_order_id');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->integer('open_order_id')->unsigned()->nullable();
            $table->foreign('open_order_id')->references('id')->on('open_orders');
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
            $table->dropForeign(['open_order_id']);
            $table->dropColumn('open_order_id');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->integer('open_order_id')->unsigned();
            $table->foreign('open_order_id')->references('id')->on('open_orders');
        });
    }
}
