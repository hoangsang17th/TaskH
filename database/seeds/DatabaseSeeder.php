<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ToDoSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        // $this->call(StaffProjectTableSeeder::class);
        $this->call(TaskTableSeeder::class);
        // $this->call(UploadfileSeeder::class);
    }
}
