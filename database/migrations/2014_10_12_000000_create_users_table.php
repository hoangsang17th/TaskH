<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('Position_ID')->default('3');
            $table->longText('Avatar')->default('Avatar-1.png');
            $table->integer('Phone')->nullable();
            $table->string('Profession')->nullable();
            $table->string('Address')->nullable();
            $table->time('Birthday')->nullable();
            $table->string('Gender')->default('Nam');
            $table->string('Facebook')->nullable();
            $table->string('LinkedIn')->nullable();
            $table->longText('Des')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
