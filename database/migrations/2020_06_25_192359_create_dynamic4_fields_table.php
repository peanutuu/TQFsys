<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynamic4FieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic4_fields', function (Blueprint $table) {
            $table->id();
            $table->text('tqf5221');
            $table->text('tqf5222');
            $table->text('tqf5223');
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
        Schema::dropIfExists('dynamic4_fields');
    }
}
