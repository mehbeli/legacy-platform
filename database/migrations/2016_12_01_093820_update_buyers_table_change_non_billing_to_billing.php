<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBuyersTableChangeNonBillingToBilling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('phone_number');
        });

        Schema::table('buyers', function (Blueprint $table) {
            $table->string('billing_name');
            $table->string('billing_email_address');
            $table->string('billing_phone_number')->nullable();
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
            $table->dropColumn('billing_name');
            $table->dropColumn('billing_email_address');
            $table->dropColumn('billing_phone_number')->nullable();
        });

        Schema::table('buyers', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
        });
    }
}
