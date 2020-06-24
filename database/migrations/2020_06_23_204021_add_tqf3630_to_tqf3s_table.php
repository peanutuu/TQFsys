<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTqf3630ToTqf3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tqf3s', function (Blueprint $table) {
            $table->text('tqf3630')->default('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tqf3s', function (Blueprint $table) {
            $table->dropColumn(['tqf3630']);
        });
    }
}
