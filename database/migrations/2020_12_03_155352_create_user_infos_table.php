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
            $table->longText('Account_Avatar');
            $table->integer('User_Phone');
            $table->string('User_Profession');
            $table->string('User_Address');
            $table->time('User_Birthday');
            $table->string('User_Gender');
            $table->string('User_Facebook');
            $table->string('User_LinkedIn');
            $table->longText('User_Des');
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
