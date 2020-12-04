<?php

use Illuminate\Database\Seeder;
use App\Model\user;

class UserTableSeeder extends Seeder
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
        $user = new user;
        $user->name = $faker->name;
        $user->email = $faker->freeEmail;
        $user->password = $faker->sha256;
        $user->Position_ID = rand(1,3);
        $user->save();
        }
    }
}
