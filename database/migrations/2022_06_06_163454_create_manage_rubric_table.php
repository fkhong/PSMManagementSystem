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
        Schema::create('manage_rubric', function (Blueprint $table) {
            $table->string('rubricID'); 
            $table->string('coordinatorID'); 
            $table->string('rubricDetail');
            $table->float('rubricMark'); 
            $table->string('rubricCategory'); 
            $table->date('rubricDate'); 
        });

        DB::table('manage_rubric')->insert ([
            ['rubricID'=>'R001','coordinatorID'=>'C001','rubricDetail'=>'Null','rubricMark'=>'40.0','rubricCategory'=>'PSM1','rubricDate'=>'2022-06-06']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_rubric');
    }
};
