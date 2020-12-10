<?php

use Illuminate\Database\Seeder;
use App\Model\UserModel;
use Illuminate\Support\Facades\Hash;
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
        $user = new UserModel;
        $user->name = $faker->name;
        $user->email = $faker->freeEmail;
        $user->password = Hash::make('12345678');
        $user->Position_ID = 1;
        $user->save();
        }
    }
}
