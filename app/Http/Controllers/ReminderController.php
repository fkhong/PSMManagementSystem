<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{
    
    public function index()
    {
        $role = Auth::user()->role;
        if ($role =='0') {
            return view('errorAccessStudent');
        }else {
            
            return view('manageEvaluationReminder/evaluationReminderHome');
        }
        
    }


}
