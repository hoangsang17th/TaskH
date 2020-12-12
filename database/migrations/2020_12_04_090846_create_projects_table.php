<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('Project_ID');
            $table->integer('Customer_ID');
            $table->string('Project_Name');
            $table->integer('Status_ID')->default('1');
            $table->longText('Des_Project')->nullable();
            $table->longText('Project_Image')->default('avatar-4.png');
            $table->date('Start_Date')->nullable();
            $table->date('End_Date')->nullable();
            $table->integer('Budget')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
