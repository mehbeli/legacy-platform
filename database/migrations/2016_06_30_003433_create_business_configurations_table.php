<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_configuration', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_type_id')->unsigned();
            // $table->foreign('business_type_id')->references('id')->on('business_type');
            $table->integer('payment_gateway_id')->unsigned();
            // $table->foreign('payment_gateway_id')->references('id')->on('payment_gateway');
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
        Schema::drop('business_configuration');
    }
}
