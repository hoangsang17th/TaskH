<?php

use Illuminate\Database\Seeder;
use App\Model\todo;

class ToDoSeeder extends Seeder
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
        $todo = new todo;
        $todo->Mission_ToDo = $faker->text($maxNbChars = 25);
        $todo->Des_ToDo = $faker->text($maxNbChars = 200)  ;
        $todo->id = rand(1,100);
        $todo->save();
        }
    }
}
