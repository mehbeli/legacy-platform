<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBuyersTableReconstruct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Drop old table structure
        Schema::drop('buyers');

        // Create new table structure for buyers table
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->string('email')->nullable();
            // Billing Information
            $table->string('billing_name')->nullable();
            $table->string('billing_phone_number')->nullable();
            $table->string('billing_first_line')->nullable();
            $table->string('billing_second_line')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_postal_code')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_country')->nullable();
            // Delivery Information
            $table->string('delivery_name')->nullable();
            $table->string('delivery_phone_number')->nullable();
            $table->string('delivery_first_line')->nullable();
            $table->string('delivery_second_line')->nullable();
            $table->string('delivery_city')->nullable();
            $table->string('delivery_postal_code')->nullable();
            $table->string('delivery_state')->nullable();
            $table->string('delivery_country')->nullable();

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

        // Drop new structured table
        Schema::drop('buyers');

        // Create old table structure
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('billing_address_id')->unsigned()->nullable();
            $table->foreign('billing_address_id')->references('id')->on('user_addresses');
            $table->string('billing_first_line')->nullable();
            $table->string('billing_second_line')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_postal_code')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_country')->nullable();
            $table->integer('delivery_address_id')->unsigned()->nullable();
            $table->foreign('delivery_address_id')->references('id')->on('user_addresses');
            $table->string('delivery_first_line')->nullable();
            $table->string('delivery_second_line')->nullable();
            $table->string('delivery_city')->nullable();
            $table->string('delivery_postal_code')->nullable();
            $table->string('delivery_state')->nullable();
            $table->string('delivery_country')->nullable();
            $table->timestamps();
        });

    }
}
