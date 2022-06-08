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
        Schema::create('coordinators', function (Blueprint $table) {
            $table->string('coordinatorID'); 
            $table->string('coordinatorName'); 
            $table->integer('coordinatorContactNo');
            $table->string('coordinatorEmail'); 
            $table->string('expertise'); 
        });

        DB::table('coordinators')->insert ([
            ['coordinatorID'=>'C001','coordinatorName'=>'Coordinator1','coordinatorContactNo'=>'0123456789','coordinatorEmail'=>'coordinator@outlook.com','expertise'=>'Machine Learning']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinators');
    }
};
