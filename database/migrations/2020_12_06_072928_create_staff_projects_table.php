<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_projects', function (Blueprint $table) {
            $table->increments('SProject_ID');
            $table->integer('Project_ID')->unsigned();
            $table->foreign('Project_ID')->references('Project_ID')->on('projects');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('staff_projects');
    }
}
