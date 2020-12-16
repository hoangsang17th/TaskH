<?php

use Illuminate\Database\Seeder;
use App\Model\skill;
class SkillTableSeeder extends Seeder
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
        $skill = new skill;
        $skill->Skill_Name = $faker->text($maxNbChars = 25);
        $skill->save();
        }
    }
}
