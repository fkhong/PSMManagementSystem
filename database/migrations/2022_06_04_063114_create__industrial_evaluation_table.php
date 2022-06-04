<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrialEvaluation', function (Blueprint $table) {
            $table->string('industrialEvaluationId');
            $table->string('studentId');
            $table->string('studentName');
            $table->string('PSMTitle');
            $table->string('ieDate');
            $table->string('ieTime');
        });

        DB::table('industrialEvaluation')->insert ([
            ['industrialEvaluationId'=>'IE001','studentId'=>'S001','studentName'=>'Foong','PSMTitle'=>'Music Recommender System','ieDate'=>'12/06/2022','ieTime'=>'1330']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_industrial_evaluation');
    }
};
