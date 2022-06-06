<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; 

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manageReport/reportHome');
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
    public function bookmark()
    {
        
        $studentId = Report::where ('studentId', '=', request('studentId'))->first();

        if ($studentId == null){
            $databm = new Report();
            $databm-> studentId = request('studentId');
            $databm-> studentName = request('studentName');
            $databm-> fypTitle = request('fypTitle');
            $databm-> courseName = request('courseName');
            $databm-> stdContactNo = request('stdContactNo');
            $databm-> stdEmail = request('stdEmail');
            $databm-> supervisorName = request('supervisorName');

            $databm-> save();
            return redirect('manageReport/reportHome')->with('status', 'Bookmark Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewReport()
    {
        $data = Report::all();
        return view('manageReport/viewReport',['items'=>$data]);
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

    public function search()
    {
        $search_text = $_GET['term'];
        $data = Report::where('studentId', 'Like', '%' . $search_text . '%')-> get();
        

        return view('manageReport/viewReport', compact('data'));
    }
}
