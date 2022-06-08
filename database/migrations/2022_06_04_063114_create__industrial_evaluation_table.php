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
            $table->date('ieDate');
            $table->time('ieTime');
        });

        DB::table('industrialEvaluation')->insert ([
            ['industrialEvaluationId'=>'IE001','studentId'=>'CB19053','studentName'=>'Foong KH','PSMTitle'=>'Music Recommender System','ieDate'=>'2022-06-12','ieTime'=>'13:30']
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
