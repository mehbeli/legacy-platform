<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOpenOrdersTableAddUniqueUrlForOpenOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('open_orders', function (Blueprint $table) {
            $table->string('sale_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('open_orders', function (Blueprint $table) {
            $table->dropColumn('sale_url');
        });
    }
}
