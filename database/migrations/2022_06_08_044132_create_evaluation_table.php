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
        Schema::create('evaluation', function (Blueprint $table) {
            $table->string('evaluationId');
            $table->string('lecturerId');
            $table->string('studentId');
            $table->string('studentName');
            $table->string('PSMTitle');
            $table->date('evaluationDate');
            $table->double('marksByCoordinator');
            $table->double('marksBySupervisor');
            $table->string('evaluationComments');
            $table->double('totalMarks');

        });

        DB::table('evaluation')->insert ([
            ['evaluationId'=>'E001','lecturerId'=>'L001','studentId'=>'CB19053','studentName'=>'Foong KH','PSMTitle'=>'MRS','evaluationDate'=>'2022-06-14','marksByCoordinator'=>'50.0','marksBySupervisor'=>'30.0','evaluationComments'=>'Overall is acceptable.','totalMarks'=>'0.0']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation');
    }
};
