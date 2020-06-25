<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynamic5FieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic5_fields', function (Blueprint $table) {
            $table->id();
            $table->text('tqf5231');
            $table->text('tqf5232');
            $table->text('tqf5233');
            $table->text('tqf5234');
            $table->unsignedInteger('tqf5_id');
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
        Schema::dropIfExists('dynamic5_fields');
    }
}
