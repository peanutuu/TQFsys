<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynamic2FieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic2_fields', function (Blueprint $table) {
            $table->id();
            $table->text('tqf3521');
            $table->text('tqf3522');
            $table->text('tqf3523');
            $table->text('tqf3524');
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
        Schema::dropIfExists('dynamic2_fields');
    }
}
