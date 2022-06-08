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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->string('lecturerID'); 
            $table->string('lecturerName'); 
            $table->integer('lecturerContactNo');
            $table->string('lecturerEmail'); 
            $table->string('superviseeName'); 
         
        });

        DB::table('lecturers')->insert ([
            ['lecturerID'=>'L001','lecturerName'=>'Lecturer1','lecturerContactNo'=>'0123456789','lecturerEmail'=>'lecturer@outlook.com','superviseeName'=>'Student1']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
};
