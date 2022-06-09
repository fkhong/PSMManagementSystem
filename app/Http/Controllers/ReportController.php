<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; 
use App\Models\Evaluation; 
use App\Models\IndustrialEvaluation; 

class ReportController extends Controller
{
    public function unbookmarked($studentId) {
        Report::where('studentId',$studentId)
        ->update (['bookmark'=> false]);

        $data = Report::where ('bookmark',  true)->get();
        return view('manageReport/reportHome',['items'=>$data]);
    }

    public function bookmark2($studentId) {

        Report::where('studentId',$studentId)
        ->update (['bookmark'=> true]);

        $data = Report::where ('bookmark',  true)->get();
        return view('manageReport/reportHome',['items'=>$data]);
    }

    public function index()
    {
        $data = Report::where ('bookmark',  true)->get();
        return view('manageReport/reportHome',['items'=>$data]);
        
    }

    public function bookmark()
    {
        $studentId = Report::where ('studentId', '=', request('studentId'))->first();
        if ($studentId == null){
            $data = new Report();
            $data-> studentId = request('studentId');
            $data-> studentName = request('studentName');
            $data-> fypTitle = request('fypTitle');
            $data-> courseName = request('courseName');
            $data-> stdContactNo = request('stdContactNo');
            $data-> stdEmail = request('stdEmail');
            $data-> supervisorName = request('supervisorName');

            $data-> save();
            //return view('manageReport/viewReport',['items'=>$data]);
            //return view('manageReport/reportHome')->with('status', 'BookMarked Successfully');
            //return redirect('manageReport/reportHome');
            //return view('manageReport/bookmark')->with('status', 'BookMarked Successfully');
        }
        return view('manageReport/reportHome')->with('status', 'BookMarked Successfully');
        //return view('manageReport/bookmark')->with('status', 'BookMarked Successfully');
    }

    public function viewReport()
    {
        $data = Report::all();
        return view('manageReport/viewReport',['items'=>$data]);
    }


    public function search()
    {
        $search_text = $_GET['term'];
        $data = Report::where('studentId', 'Like', '%' . $search_text . '%')-> get();
        $edata = Evaluation::where('studentId', 'Like', '%' . $search_text . '%')-> get();
        $iedata = IndustrialEvaluation::where('studentId', 'Like', '%' . $search_text . '%')-> get();

        return view('manageReport/viewReport', compact('data','edata','iedata'));
    }
}
