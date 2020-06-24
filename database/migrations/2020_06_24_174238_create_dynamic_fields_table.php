<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynamicFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_fields', function (Blueprint $table) {
            $table->id();
            $table->string('tqf3511');
            $table->text('tqf3512');
            $table->integer('tqf3513');
            $table->integer('tqf3514');
            $table->text('tqf3515');
            $table->text('tqf3516');
            $table->string('tqf3517');
            $table->unsignedInteger('tqf3_id');
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
        Schema::dropIfExists('dynamic_fields');
    }
}
