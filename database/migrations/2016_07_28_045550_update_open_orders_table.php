<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOpenOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('open_orders', function (Blueprint $table) {
            $table->string('title');
            $table->string('descriptions');
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
            $table->dropColumn('title');
            $table->dropColumn('descriptions');
        });
    }
}
