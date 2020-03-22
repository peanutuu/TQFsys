<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTqfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tqfs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tqf2_id')->nullable();
            $table->unsignedInteger('tqf3_id')->nullable();
            $table->unsignedInteger('tqf5_id')->nullable();
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
        Schema::dropIfExists('tqfs');
    }
}
