<?php

use App\Bill;
use Illuminate\Database\Seeder;

class BillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill = new Bill();
        $bill->user_id = '1234314';
        $bill->payDate = '2019-09-23';
        $bill->billPrice = '10000000';
        $bill->billAddress = 'address';
        $bill->billDistric = 'address';
        $bill->billCity = 'address';
        $bill->save();

        $bill = new Bill();
        $bill->user_id = '12343434';
        $bill->payDate = '2019-09-23';
        $bill->billPrice = '8000000';
        $bill->billAddress = 'address';
        $bill->billDistric = 'address';
        $bill->billCity = 'address';
        $bill->save();
    }
}
