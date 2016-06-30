<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_invoices', function (Blueprint $table) {
            $table->increments('id');
            // add anonymous order later
            $table->integer('anonymous_order')->unsigned()->nullable();
            $table->string('product_list');
            // add coupons table foreign key later
            $table->integer('coupon_id')->unsigned();
            $table->float('discount')->default(0);
            $table->float('shipping')->default(0);
            $table->float('grand_total');
            $table->boolean('quotation')->default(false);
            // quotation confirmation change to invoices
            $table->boolean('invoices')->default(false);
            $table->boolean('paid')->default(false);
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
        Schema::drop('quotation_invoices');
    }
}
