<?php

use Illuminate\Database\Seeder;
use App\Model\tasks;
class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<=100; $i++){
        $tasks = new tasks;
        $tasks->Project_ID = rand(1,10);
        $tasks->id = rand(1,3);
        $tasks->Task_Name = $faker->name;
        $tasks->Task_Stage = "10%";
        $tasks->save();
        }
    }
}
