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
            
            $table->id();
            $table->string('employee_id')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('confirm_email')->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->string('sex');
            $table->string('marital_status');
            $table->string('address');
            $table->string('city');
            $table->string('zip_code');
            $table->string('contact_number');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     *             $table->integer('department')->default('0');
         *   $table->integer('position');
          *  $table->string('level');
     * Reverse the migrations.
     *
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
