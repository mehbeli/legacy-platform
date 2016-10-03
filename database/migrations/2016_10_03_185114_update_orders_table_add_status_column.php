<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersTableAddStatusColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->boolean('paid')->default(false);
            $table->string('status')->default('pending');
            $table->string('status_ref')->nullable();
            $table->binary('purchase_list');
            $table->string('order_id');
            $table->dropColumn('confirmed');
            $table->dropColumn('buy_list');
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
            $table->dropColumn('paid');
            $table->dropColumn('status');
            $table->dropColumn('status_ref');
            $table->dropColumn('purchase_list');
            $table->dropColumn('order_id');
            $table->string('buy_list');
            $table->boolean('confirmed');
        });
    }
}
