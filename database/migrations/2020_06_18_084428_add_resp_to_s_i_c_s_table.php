<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRespToSICSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('s_i_c_s', function (Blueprint $table) {
            $table->unsignedBigInteger('resp11');
            $table->unsignedBigInteger('resp12');
            $table->unsignedBigInteger('resp13');
            $table->unsignedBigInteger('resp14');
            $table->unsignedBigInteger('resp15');
            $table->unsignedBigInteger('resp16');
            $table->unsignedBigInteger('resp17');
            $table->unsignedBigInteger('resp21');
            $table->unsignedBigInteger('resp22');
            $table->unsignedBigInteger('resp23');
            $table->unsignedBigInteger('resp24');
            $table->unsignedBigInteger('resp25');
            $table->unsignedBigInteger('resp26');
            $table->unsignedBigInteger('resp27');
            $table->unsignedBigInteger('resp28');
            $table->unsignedBigInteger('resp31');
            $table->unsignedBigInteger('resp32');
            $table->unsignedBigInteger('resp33');
            $table->unsignedBigInteger('resp34');
            $table->unsignedBigInteger('resp41');
            $table->unsignedBigInteger('resp42');
            $table->unsignedBigInteger('resp43');
            $table->unsignedBigInteger('resp44');
            $table->unsignedBigInteger('resp45');
            $table->unsignedBigInteger('resp46');
            $table->unsignedBigInteger('resp51');
            $table->unsignedBigInteger('resp52');
            $table->unsignedBigInteger('resp53');
            $table->unsignedBigInteger('resp54');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('s_i_c_s', function (Blueprint $table) {
            $table->dropColumn(['resp11'
                                ,'resp12','resp13','resp14','resp15','resp16','resp17'
                                ,'resp21','resp22','resp23','resp24','resp25','resp26','resp27','resp28'
                                ,'resp31','resp32','resp33','resp34'
                                ,'resp41','resp42','resp43','resp44','resp45','resp46'
                                ,'resp51','resp52','resp53','resp54'
                                ]);
        });
    }
}
