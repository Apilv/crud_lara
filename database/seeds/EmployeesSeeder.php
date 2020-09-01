<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee1 = new \App\Employees();
        $employee1->name = "Klaudijus";
        $employee1->save();

        $employee2 = new \App\Employees();
        $employee2->name = "Tomas";
        $employee2->save();
    }
}
