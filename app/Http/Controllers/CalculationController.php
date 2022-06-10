<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\IndustrialEvaluation; 
use App\Models\Evaluation; 
use Illuminate\Support\Facades\Auth;

class CalculationController extends Controller
{

    public function test () {
        return view('managePSMCalculation/test');
    }

    public function calculateTotal($studentId) {
        
        $marksByCoordinator = Evaluation::where('studentId', '=', $studentId)->value('marksByCoordinator');
        $marksBySupervisor = Evaluation::where('studentId', '=', $studentId)->value('marksBySupervisor');

        Evaluation::where('studentId',$studentId)
        ->update (['totalMarks'=>($marksByCoordinator + $marksBySupervisor)]);

        $data = Evaluation::all()->sortByDesc('totalMarks');
        return view('managePSMCalculation/psmCalculationHome',['items'=>$data]);
    }

    public function updateSchedule() {
        $industrialEvaluationId = request('industrialEvaluationId');
        
        $ieDate = request('ieDate');
        $ieTime = request('ieTime');

        IndustrialEvaluation::where('industrialEvaluationId',$industrialEvaluationId)
        ->update (['ieDate'=>$ieDate, 'ieTime'=>$ieTime]);

        return redirect('/viewSchedule')->with('status', 'Schedule Updated Successfully');
    }

    public function editSchedule($industrialEvaluationId){
        $schedule = IndustrialEvaluation::select('*')->where('industrialEvaluationId', '=', $industrialEvaluationId)->first();
        return view('managePSMCalculation/editSchedule', ['items' => $schedule]);
    }

    public function deleteSchedule($industrialEvaluationId) {
        $data = IndustrialEvaluation::select('*')->where('industrialEvaluationId', '=', $industrialEvaluationId)->delete();
        return redirect('/viewSchedule')->with('status', 'Schedule Deleted Successfully');
    }

    public function addSchedule() {

        

        $industrialEvaluation = IndustrialEvaluation::select('studentId')->get();
        $data = Evaluation::whereNotIn('studentId',$industrialEvaluation)->get()->sortByDesc('totalMarks')->take(20);
        
        return view('managePSMCalculation/addSchedule',compact('data'));
    }

    public function storeSchedule() {
        $studentId = IndustrialEvaluation::where ('studentId', '=', request('studentId'))->first();

        if ($studentId == null){
            $industrialEvaluation = new IndustrialEvaluation();
            $industrialEvaluation-> industrialEvaluationId = request('industrialEvaluationId');
            $industrialEvaluation-> studentId = request('studentId');
            $industrialEvaluation-> studentName = request('studentName');
            $industrialEvaluation-> PSMTitle = request('PSMTitle');
            $industrialEvaluation-> ieDate = request('ieDate');
            $industrialEvaluation-> ieTime = request('ieTime');

            $industrialEvaluation-> save();
            return redirect('/addSchedule')->with('status', 'Schedule Added Successfully');
        }
    }

    public function viewSchedule() {
        $data = IndustrialEvaluation::all();
        return view('managePSMCalculation/viewSchedule',['items'=>$data]);
    }

    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '0') {
            return view('errorAccessStudent');
            
        }else if ($role == '1') {
            return view('errorAccessLecturer');
        }
        else 
        {
            
            $data = Evaluation::all()->sortByDesc('totalMarks');
        return view('managePSMCalculation/psmCalculationHome',['items'=>$data]);
        }
        
    }


}