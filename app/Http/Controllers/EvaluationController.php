<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\DataEntry; 
use App\Models\DataEntryLec; 
use App\Models\DataEntryCoo; 
use App\Models\Evaluation; 
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
{

    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '0') {
            return view('errorAccessStudent');
        }else {
            
            return view('manageEvaluationProcess/evaluationProcessHome');
        }
        
    }

    public function addEvaluation()
    {
        $evaluationDetails = Evaluation::select('studentId')->get();
        $studentDetails = DataEntry::whereNotIn('studentId',$evaluationDetails)->get();
        $lecturerDetails = DataEntryLec::all();
       
        return view('manageEvaluationProcess/addEvaluation',compact('studentDetails','lecturerDetails'));
    }

    public function storeEvaluation()
    {
        $studentId = Evaluation::where ('studentId', '=', request('studentId'))->first();

        if ($studentId == null){
            $evaluation = new Evaluation();
            $evaluation-> evaluationId = request('evaluationId');
            $evaluation-> lecturerId = request('lecturerId');
            $evaluation-> studentId = request('studentId');
            $evaluation-> studentName = request('studentName');
            $evaluation-> PSMTitle = request('PSMTitle');
            $evaluation-> evaluationDate = request('evaluationDate');
            $evaluation-> marksByCoordinator = request('marksByCoordinator');
            $evaluation-> marksBySupervisor = request('marksBySupervisor');
            $evaluation-> evaluationComments = request('evaluationComments');
            $evaluation-> totalMarks = 0.0;

            $evaluation-> save();

            return redirect('/viewEvaluation')->with('status', 'New Evaluation Form Added Successfully');
            
        }else {
            return redirect('/viewEvaluation')->with('status', 'Student exists!');

        }

    }

    public function viewEvaluation()
    {
        $data = Evaluation::all();
        return view('manageEvaluationProcess/viewEvaluation',['items'=>$data]);
    }


    public function editEvaluation($studentId)
    {
        $evaluationData = Evaluation::select('*')->where('studentId', '=', $studentId)->first();
        return view('manageEvaluationProcess/editEvaluation', ['items' => $evaluationData]);
    }

    public function updateEvaluation()
    {
            $evaluationId = request('evaluationId');
            $lecturerId = request('lecturerId');
            $studentId = request('studentId');
            $studentName = request('studentName');
            $PSMTitle = request('PSMTitle');
            $evaluationDate = request('evaluationDate');
            $marksByCoordinator = request('marksByCoordinator');
            $marksBySupervisor = request('marksBySupervisor');
            $evaluationComments = request('evaluationComments');


            Evaluation::where('studentId',$studentId)
        ->update (['evaluationDate'=>$evaluationDate, 'marksByCoordinator'=>$marksByCoordinator, 'marksBySupervisor'=>$marksBySupervisor, 'evaluationComments'=>$evaluationComments,'totalMarks'=>($marksBySupervisor+$marksByCoordinator)]);

        return redirect('/viewEvaluation')->with('status', 'Evaluation Form Updated Successfully');
    }

    public function deleteEvaluation($studentId)
    {
        $data = Evaluation::select('*')->where('studentId', '=', $studentId)->delete();
        return redirect('/viewEvaluation')->with('status', 'Evaluation Form Deleted Successfully');
    }  
}
