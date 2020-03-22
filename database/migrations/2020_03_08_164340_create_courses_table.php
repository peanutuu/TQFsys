<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('coursename');
            $table->string('coursefac')->nullable();
            $table->string('coursesys1')->nullable();
            $table->integer('course1_1');
            $table->integer('course1_2');
            $table->integer('course1_3');
            $table->integer('course1_4');
            $table->integer('course1_5');
            $table->string('coursesys2')->nullable();
            $table->integer('course2_1');
            $table->integer('course2_2');
            $table->integer('course2_3');
            $table->integer('course2_4');
            $table->integer('course2_5');
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
        Schema::dropIfExists('courses');
    }
}
