<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\DataEntry; 
use App\Models\DataEntryLec; 
use App\Models\DataEntryCoo; 

class EvaluationController extends Controller
{

    public function index()
    {
        return view('manageEvaluationProcess/evaluationProcessHome');
    }

    public function addEvaluation()
    {
        return view('manageEvaluationProcess/addEvaluation');
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
            $evaluation-> evaluationMark = request('evaluationMark');
            $evaluation-> evaluationComment = request('evaluationComment');

            $evaluation-> save();
            return redirect('/viewEvaluation')->with('status', 'New Evaluation Form Added Successfully');
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
            $evaluationMark = request('evaluationMark');
            $evaluationComment = request('evaluationComment');


            Evaluation::where('studentId',$studentId)
        ->update (['evaluationDate'=>$evaluationDate, 'evaluationMark'=>$evaluationMark, 'evaluationComment'=>$evaluationComment]);

        return redirect('/viewEvaluation')->with('status', 'Evaluation Form Updated Successfully');
    }

    public function deleteEvaluation($studentId)
    {
        $data = Evaluation::select('*')->where('studentId', '=', $studentId)->delete();
        return redirect('/viewEvaluation')->with('status', 'Evaluation Form Deleted Successfully');
    }  
}
