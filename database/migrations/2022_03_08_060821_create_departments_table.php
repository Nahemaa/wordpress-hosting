<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('job_level', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('department_id');
            $table->integer('level_id');            
            $table->timestamps();
        });
        Schema::create('job_position', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('position_id');            
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
        Schema::drop('departments');
        Schema::drop('job_level');
        Schema::drop('job_position');


    }
}
