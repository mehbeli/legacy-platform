<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductsTableChangeVarLengthOnImg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_stocks', function (Blueprint $table) {
            $table->dropColumn('image');
        });

        Schema::table('product_stocks', function (Blueprint $table) {
            $table->binary('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_stocks', function (Blueprint $table) {
            $table->dropColumn('image');
        });

        Schema::table('product_stocks', function (Blueprint $table) {
            $table->binary('image')->nullable();
        });
    }
}
