<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project1 = new \App\Projects();
        $project1->project_name = "PHP";
        $project1->deadline = "2021-02-23";
        $project1->save();

        $project2 = new \App\Projects();
        $project2->project_name = "JAVA";
        $project2->deadline = "2020-12-23";
        $project2->save();

        $project3 = new \App\Projects();
        $project3->project_name = "JS";
        $project3->deadline = "2021-12-23";
        $project3->save();
    }
}
