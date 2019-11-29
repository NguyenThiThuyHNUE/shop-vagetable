<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new \App\Employee();
        $employee->employeeName = 'Name_01';
        $employee->employeePhone = '0123456789';
        $employee->employeeAddress = 'Address_01';
        $employee->save();

        $employee = new \App\Employee();
        $employee->employeeName = 'Name_02';
        $employee->employeePhone = '0123456789';
        $employee->employeeAddress = 'Address_01';
        $employee->save();

        $employee = new \App\Employee();
        $employee->employeeName = 'Name_03';
        $employee->employeePhone = '0123456789';
        $employee->employeeAddress = 'Address_01';
        $employee->save();

        $employee = new \App\Employee();
        $employee->employeeName = 'Name_03';
        $employee->employeePhone = '0123456789';
        $employee->employeeAddress = 'Address_01';
        $employee->save();

        //
    }
}
