<?php

use Illuminate\Database\Seeder;
use App\Model\StaffProject;
class StaffProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=1; $i<=20; $i++){
            if($i%2 == 0){
                $StaffProject = new StaffProject;
                $StaffProject->Project_ID = $i;
                $StaffProject->id = 3;
                $StaffProject->Role_ID = 3;
                $StaffProject->save();
            }
        }
    }
}
