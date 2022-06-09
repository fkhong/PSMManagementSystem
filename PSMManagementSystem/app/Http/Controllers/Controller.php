<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Carbon\Carbon;
use App\Models\evaluationReminder;
use App\Models\Evaluation;
use Illuminate\Support\Facades\AuthorizesRequests;

class ReminderController extends Controller
{
   public function test(){
       return view ('manageReminder/test');
   }

   public function reminderForm(){
       $staffID = evaluationReminder::where ('staffID','='requast('staffID'))->first();

       if ($staffID == null){
           $evaluationReminder = new evaluationReminder();
           $evaluationReminder-> reminderID = requast ('reminderID');
           $evaluationReminder-> staffID = requast ('staffID');
           $evaluationReminder-> evaluationPhase = requast ('evaluationPhase');
           $evaluationReminder-> staffPosition = requast ('staffPosition');
           $evaluationReminder-> ieDate = requast ('ieDate');
           $evaluationReminder-> ieTime = requast ('ieTime');

           $evaluationReminder->save();
           return redirect('/reminderList')->with('status','Successfully save reminder');

       }

   }
   public function reminderList(){
        $data = $evaluationReminder::all();

        $reminderForm = evaluationReminder::where ('staffID','=',$staffID)->value(reminderForm)
        return view ('manageReminder/reminderList',['items'=>$data]);
   }
   {
   public function  
   }
}
