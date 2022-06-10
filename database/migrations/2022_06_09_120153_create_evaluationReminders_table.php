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
           Schema::create('reminderForm', function (Blueprint $table) {
               $table->string('reminderID'); 
               $table->string('staffID'); 
               $table->integer('evaluationPhase');
               $table->string('staffPosition'); 
               $table->Date('reminderDate'); 
               $table->Time('reminderTime');
           });
   
           DB::table('reminderID')->insert ([
               ['reminderID'=>'S1002','staffID'=>'AA111','evaluationPhase'=>'1','staffPosition'=>'supervisor','reminderDate'=>'3/3/2022','reminderTime'=>'1200']
           ]);
       }
   
       /**
        * Reverse the migrations.
        *
        * @return void
        */
       public function down()
       {
           Schema::dropIfExists('reminderForm');
       }
   };
   