<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->increments('Info_ID');
            $table->integer('id');
            $table->longText('Account_Avatar')->nullable();
            $table->integer('User_Phone')->nullable();
            $table->string('User_Profession')->nullable();
            $table->string('User_Address')->nullable();
            $table->time('User_Birthday')->nullable();
            $table->string('User_Gender')->nullable();
            $table->string('User_Facebook')->nullable();
            $table->string('User_LinkedIn')->nullable();
            $table->longText('User_Des')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
