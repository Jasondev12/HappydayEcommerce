<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'NEW2020',
            'value' => 100
        ]);

        Coupon::create([
            'code' => 'START',
            'value' => 50
        ]);

        Coupon::create([
            'code' => 'GIGACOUPON',
            'value' => 200
        ]);

        Coupon::create([
            'code' => 'TEST',
            'value' => 2
        ]);
    }
}
