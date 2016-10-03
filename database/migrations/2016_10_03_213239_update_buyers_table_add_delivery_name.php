<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBuyersTableAddDeliveryName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->string('delivery_name');
            $table->string('delivery_phone_number');
            $table->string('delivery_email_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->dropColumn('delivery_name');
            $table->dropColumn('delivery_phone_number');
            $table->dropColumn('delivery_email_address');
        });
    }
}
