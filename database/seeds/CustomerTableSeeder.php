<?php

use Illuminate\Database\Seeder;
use App\Model\customer;
class CustomerTableSeeder extends Seeder
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
        $customer = new customer;
        $customer->Customer_Name = $faker->name;
        $customer->Customer_Phone = $faker->numberBetween($min = 100000000, $max = 999999999);
        $customer->Customer_Address = $faker->address;
        $customer->Customer_Email = $faker->freeEmail;
        $customer->Customer_Facebook = $faker->url;
        $customer->Customer_Description = $faker->text(250);
        $customer->Customer_Birthday = $faker->date($format = 'Y-m-d', $max = 'now');
        $customer->save();
        }
    }
}
