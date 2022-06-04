<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\IndustrialEvaluation; 

class CalculationController extends Controller
{

    public function test () {
        return view('managePSMCalculation/test');
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
        return view('managePSMCalculation/addSchedule');
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('managePSMCalculation/psmCalculationHome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}