<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('Customer_ID');
            $table->string('Customer_ID');
            $table->integer('Customer_Phone');
            $table->string('Customer_Address');
            $table->string('Customer_Email');
            $table->string('Customer_Facebook');
            $table->string('Customer_Description');
            $table->date('Customer_Birthday');
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
        Schema::dropIfExists('customers');
    }
}
