<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoredetailToTqf5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tqf5s', function (Blueprint $table) {
            $table->text('tqf5121');
            $table->text('tqf5131');
            $table->text('tqf5132');
            $table->text('tqf5141');
            $table->text('tqf5142');
            $table->text('tqf5143');
            $table->text('tqf5151');
            $table->text('tqf5241');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tqf5s', function (Blueprint $table) {
            $table->dropColumn(['tqf5121','tqf5131','tqf5132','tqf5141','tqf5142','tqf5143','tqf5151','tqf5241']);
        });
    }
}
