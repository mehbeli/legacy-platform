<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductsTableAddUniqueIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('product_stocks', function (Blueprint $table) {
             $table->string('unique_id');
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
             $table->dropColumn('unique_id');
         });
     }
}
