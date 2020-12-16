<?php

use Illuminate\Database\Seeder;
use App\Model\project;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d');
        $faker = Faker\Factory::create();
        for($i=0; $i<=100; $i++){
        $project = new project;
        $project->Customer_ID = rand(1,3);
        $project->Project_Name = $faker->name;
        $project->Des_Project = $faker->text(255);
        $project->Start_Date = $faker->date($format = 'Y-m-d', $max = 'now');
        $project->End_Date = $date;
        $project->Budget = $faker->numberBetween($min = 1000, $max = 9000);
        $project->save();
        }
    }
}
