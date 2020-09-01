<?php

use App\Employees;
use App\Projects;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmployeesSeeder::class);
        $this->call(ProjectsSeeder::class);
    }
}
