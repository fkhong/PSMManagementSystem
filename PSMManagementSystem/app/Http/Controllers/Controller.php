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

        $evaluationReminder = evaluationReminder::select('staffID')->get();
        $data = evaluationReminder::whereNotIn('staffID',$evaluationReminder)->get()->sortByAssc('reminderForm')->take (50);

       $staffID = evaluationReminder::where ('staffID','='requast('staffID'))->first();

       if ($staffID == null){
           $evaluationReminder = new evaluationReminder();
           $evaluationReminder-> reminderID = requast ('reminderID');
           $evaluationReminder-> staffID = requast ('staffID');
           $evaluationReminder-> evaluationPhase = requast ('evaluationPhase');
           $evaluationReminder-> staffPosition = requast ('staffPosition');
           $evaluationReminder-> ieDate = requast ('reminderDate');
           $evaluationReminder-> ieTime = requast ('reminderTime');

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
   public function reminderEdit(){
       $reminder_edit = evaluationReminder::select('*')->where('reminderID','=',$reminderID)->first();
        return view('manageReminder/reminderEdit'),['items'=>$reminder_edit]);

    } 
   }
   public function reminderDelete(){
       $data = evaluationReminder::select('*')->where('reminderID','=',$reminderID)->delete();
       return redirect('/reminderList')->with('status','Successfully delete reminder');

   }
}
