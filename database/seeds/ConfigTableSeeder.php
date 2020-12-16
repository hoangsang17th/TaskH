<?php

use Illuminate\Database\Seeder;
use App\Model\configpage;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<=3; $i++){
        $configpage = new configpage;
        $configpage->Config_Name = $faker->name;
        $configpage->Content = $faker->text(35);
        $configpage->save();
        }
    }
}
