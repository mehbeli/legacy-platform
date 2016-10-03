<?php

use Illuminate\Database\Seeder;

class DeliveryOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_options')->delete();

        DB::table('delivery_options')->insert([
            'delivery' => 'Self Pickup',
            'slug' => 'self-pickup'
        ]);
        DB::table('delivery_options')->insert([
            'delivery' => 'Delivery / Courier',
            'slug' => 'delivery-courier'
        ]);
    }
}
