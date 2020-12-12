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
        for($i=0; $i<=3; $i++){
        $user = new UserModel;
        $user->name = $faker->name;
        $user->email = $i."@TaskGo.com";
        $user->password = Hash::make('@TaskGo.com');
        $user->Position_ID = 3;
        $user->save();
        }
    }
}
