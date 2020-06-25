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
            $table->string('courseid');
            $table->string('coursename');
            $table->string('coursefac');
            $table->string('coursefac2');
            $table->string('courselv');
            $table->string('coursecredit');
            $table->string('courseyear');
            $table->string('courselowcredit');
            $table->string('course1');
            $table->string('course2');
            $table->string('course21');
            $table->string('course22');
            $table->string('course221');
            $table->string('course222');
            $table->string('course223');
            $table->string('course224');
            $table->string('course225');
            $table->string('course3');
            $table->string('course4');
            $table->string('course5');
            $table->string('coursesum')->nullable();
            $table->integer('user_id');
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
