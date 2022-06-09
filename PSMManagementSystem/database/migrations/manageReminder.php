<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\manageReminder;

class manageReminder extends Migration
{
    /**
     * migration for manageReminder.
     *
     * @return void
     */
    public function manageReminder()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('reminderID');
            $table->string('staffID');
            $table->double('evaluationPhase');
            $table->string('staffPosition');
            $table->Date('reminderDate');
            $table->Time('reminderTime');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
