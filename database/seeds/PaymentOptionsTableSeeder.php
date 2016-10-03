<?php

use Illuminate\Database\Seeder;

class PaymentOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_options')->delete();

        DB::table('payment_options')->insert([
            'payment' => 'FPX',
            'slug' => 'fpx'
        ]);
        DB::table('payment_options')->insert([
            'payment' => 'Cash Deposit / Internet Banking (Manual)',
            'slug' => 'cash-deposit-internet-banking'
        ]);
        DB::table('payment_options')->insert([
            'payment' => 'Cash / Cash on Delivery',
            'slug' => 'cash-cash-on-delivery'
        ]);
    }
}
