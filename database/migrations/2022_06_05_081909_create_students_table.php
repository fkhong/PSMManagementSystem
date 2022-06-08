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
        Schema::create('students', function (Blueprint $table) {
            $table->string('studentId'); 
            $table->string('studentName'); 
            $table->string('fypTitle');
            $table->string('courseName'); 
            $table->integer('stdContactNo'); 
            $table->string('stdEmail');
            $table->string('supervisorName');
            $table->boolean('bookmark');
        });

        DB::table('students')->insert ([
            ['studentID'=>'CB19053','studentName'=>'Foong KH','fypTitle'=>'MRS','courseName'=>'Software Engineering','stdContactNo'=>'01124162415','stdEmail'=>'foongkh@live.com','supervisorName'=>'Lecturer1','bookmark'=>false]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
