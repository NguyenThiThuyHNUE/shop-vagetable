<?php

use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('shipments')->insert([
           'bill_id' => 1,
           'employee_id' => 1,
        ]);

        \Illuminate\Support\Facades\DB::table('shipments')->insert([
           'bill_id' => 2,
           'employee_id' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('shipments')->insert([
           'bill_id' => 3,
           'employee_id' => 3,
        ]);
        \Illuminate\Support\Facades\DB::table('shipments')->insert([
           'bill_id' => 4,
           'employee_id' => 3,
        ]);
        //
    }
}
