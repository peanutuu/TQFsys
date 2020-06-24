<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatailToTqf3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tqf3s', function (Blueprint $table) {
            $table->text('tqf3121')->default('null');
            $table->text('tqf3131')->default('null');
            $table->text('tqf3132')->default('null');
            $table->text('tqf3133')->default('null');
            $table->text('tqf3141')->default('null');
            $table->text('tqf3151')->default('null');
            $table->text('tqf3152')->default('null');
            $table->text('tqf3161')->default('null');
            $table->text('tqf3171')->default('null');
            $table->text('tqf3181')->default('null');
            $table->text('tqf3182')->default('null');
            $table->text('tqf3183')->default('null');
            $table->text('tqf3191')->default('null');
            $table->text('tqf3211')->default('null');
            $table->text('tqf3221')->default('null');
            $table->text('tqf3311')->default('null');
            $table->text('tqf3321')->default('null');
            $table->text('tqf3322')->default('null');
            $table->text('tqf3323')->default('null');
            $table->text('tqf3324')->default('null');
            $table->text('tqf3331')->default('null');
            $table->text('tqf3341')->default('null');
            $table->text('tqf3412')->default('null');
            $table->text('tqf3413')->default('null');
            $table->text('tqf3422')->default('null');
            $table->text('tqf3423')->default('null');
            $table->text('tqf3432')->default('null');
            $table->text('tqf3433')->default('null');
            $table->text('tqf3442')->default('null');
            $table->text('tqf3443')->default('null');
            $table->text('tqf3452')->default('null');
            $table->text('tqf3453')->default('null');
            $table->text('tqf3521')->default('null');
            $table->text('tqf3522')->default('null');
            $table->text('tqf3610')->default('null');
            $table->text('tqf3620')->default('null');
            $table->text('tqf3630')->default('null');
            $table->text('tqf3710')->default('null');
            $table->text('tqf3720')->default('null');
            $table->text('tqf3730')->default('null');
            $table->text('tqf3740')->default('null');
            $table->text('tqf3750')->default('null');
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
            $table->dropColumn(['tqf3121','tqf3131'
                                ,'tqf3132','tqf3133','tqf3141','tqf3151','tqf3152'
                                ,'tqf3161','tqf3171','tqf3181','tqf3182','tqf3183','tqf3191','tqf3211','tqf3221'
                                ,'tqf3311','tqf3321','tqf3322','tqf3323'
                                ,'tqf3324','tqf3331','tqf3341','tqf3412','tqf3413','tqf3422'
                                ,'tqf3423','tqf3432','tqf3433','tqf3442','tqf3443','tqf3452','tqf3453'
                                ,'tqf3521','tqf3522','tqf3610','tqf3620','tqf3710','tqf3720','tqf3730','tqf3740','tqf3750'
                                ]);
        });
    }
}
