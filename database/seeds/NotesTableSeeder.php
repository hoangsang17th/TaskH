<?php

use Illuminate\Database\Seeder;
use App\Model\notes;
class NotesTableSeeder extends Seeder
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
        $notes = new notes;
        $notes->Note_Name = $faker->text($maxNbChars = 25);
        $notes->Note_Des = $faker->text($maxNbChars = 100);
        $notes->id = rand(1,3);
        $notes->Rule = rand(0,1);
        $notes->Note_Date = $date;
        $notes->save();
        }
    }
}
