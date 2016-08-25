<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenSaleSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_order_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('open_order_id')->unsigned();
            $table->foreign('open_order_id')->references('id')->on('open_orders');
            $table->string('options'); // options in array ?
        });

        Schema::table('open_orders', function (Blueprint $table) {
            $table->dropColumn('open_order_setting_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('open_order_settings');

        Schema::table('open_order', function (Blueprint $table) {
            $table->integer('open_order_setting_id')->unsigned();
        });
    }
}
