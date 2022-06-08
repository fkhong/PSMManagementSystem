<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\DataEntry; 
use App\Models\DataEntryLec; 
use App\Models\DataEntryCoo; 

class DataController extends Controller
{

    public function index()
    {
        return view('manageDataEntry/dataEntryHome');
    }

    //Student
    public function addData()
    {
        return view('manageDataEntry/addData');
    }

    public function storeData()
    {
        $studentId = DataEntry::where ('studentId', '=', request('studentId'))->first();

        if ($studentId == null){
            $dataEntry = new DataEntry();
            $dataEntry-> studentId = request('studentId');
            $dataEntry-> studentName = request('studentName');
            $dataEntry-> fypTitle = request('fypTitle');
            $dataEntry-> courseName = request('courseName');
            $dataEntry-> stdContactNo = request('stdContactNo');
            $dataEntry-> stdEmail = request('stdEmail');
            $dataEntry-> supervisorName = request('supervisorName');
            $dataEntry-> bookmark = false;

            $dataEntry-> save();
            return redirect('/viewData')->with('status', 'Data Added Successfully');
        }
    }


    public function viewData()
    {
        $data = DataEntry::all();
        return view('manageDataEntry/viewData',['items'=>$data]);
    }


    public function editData($studentId)
    {
        $stdData = DataEntry::select('*')->where('studentId', '=', $studentId)->first();
        return view('manageDataEntry/editData', ['items' => $stdData]);
    }

    public function updateData()
    {
        $studentId = request('studentId');
        $studentName = request('studentName');
        $fypTitle = request('fypTitle');
        $courseName = request('courseName');
        $stdContactNo = request('stdContactNo');
        $stdEmail = request('stdEmail');
        $supervisorName = request('supervisorName');


        DataEntry::where('studentId',$studentId)
        ->update (['studentName'=>$studentName, 'fypTitle'=>$fypTitle, 'courseName'=>$courseName, 'stdContactNo'=>$stdContactNo, 'stdEmail'=>$stdEmail, 'supervisorName'=>$supervisorName]);

        return redirect('/viewData')->with('status', 'Data Updated Successfully');
    }

    public function deleteData($studentId)
    {
        $data = DataEntry::select('*')->where('studentId', '=', $studentId)->delete();
        return redirect('/viewData')->with('status', 'Data Deleted Successfully');
    }


    //Lecturer
    public function addLecData()
    {
        return view('manageDataEntry/addLecData');
    }

    public function storeLecData()
    {
        $lecturerID = DataEntryLec::where ('lecturerID', '=', request('lecturerID'))->first();

        if ($lecturerID == null){
            $dataEntryLec = new DataEntryLec();
            $dataEntryLec-> lecturerID = request('lecturerID');
            $dataEntryLec-> lecturerName = request('lecturerName');
            $dataEntryLec-> lecturerContactNo = request('lecturerContactNo');
            $dataEntryLec-> lecturerEmail = request('lecturerEmail');
            $dataEntryLec-> superviseeName = request('superviseeName');

            $dataEntryLec-> save();
            return redirect('/viewLecData')->with('status', 'Lecturer Data Added Successfully');
        }
    }


    public function viewLecData()
    {
        $data = DataEntryLec::all();
        return view('manageDataEntry/viewLecData',['items'=>$data]);
    }


    public function editLecData($lecturerID)
    {
        $lecData = DataEntryLec::select('*')->where('lecturerID', '=', $lecturerID)->first();
        return view('manageDataEntry/editLecData', ['items' => $lecData]);
    }

    public function updateLecData()
    {
        $lecturerID = request('lecturerID');
        $lecturerName = request('lecturerName');
        $lecturerContactNo = request('lecturerContactNo');
        $lecturerEmail = request('lecturerEmail');
        $superviseeName = request('superviseeName');


        DataEntryLec::where('lecturerID',$lecturerID)
        ->update (['lecturerName'=>$lecturerName, 'lecturerContactNo'=>$lecturerContactNo, 'lecturerEmail'=>$lecturerEmail, 'superviseeName'=>$superviseeName]);

        return redirect('/viewLecData')->with('status', 'Lecturer Data Updated Successfully');
    }

    public function deleteLecData($lecturerID)
    {
        $data = DataEntryLec::select('*')->where('lecturerID', '=', $lecturerID)->delete();
        return redirect('/viewLecData')->with('status', 'Lecturer Data Deleted Successfully');
    }

    //Coordinator
    public function addCooData()
    {
        return view('manageDataEntry/addCooData');
    }

    public function storeCooData()
    {
        $coordinatorID = DataEntryCoo::where ('coordinatorID', '=', request('coordinatorID'))->first();

        if ($coordinatorID == null){
            $dataEntryCoo = new DataEntryCoo();
            $dataEntryCoo-> coordinatorID = request('coordinatorID');
            $dataEntryCoo-> coordinatorName = request('coordinatorName');
            $dataEntryCoo-> coordinatorContactNo = request('coordinatorContactNo');
            $dataEntryCoo-> coordinatorEmail = request('coordinatorEmail');
            $dataEntryCoo-> expertise = request('expertise');

            $dataEntryCoo-> save();
            return redirect('/viewCooData')->with('status', 'Coordinator Data Added Successfully');
        }
    }


    public function viewCooData()
    {
        $data = DataEntryCoo::all();
        return view('manageDataEntry/viewCooData',['items'=>$data]);
    }


    public function editCooData($coordinatorID)
    {
        $cooData = DataEntryCoo::select('*')->where('coordinatorID', '=', $coordinatorID)->first();
        return view('manageDataEntry/editCooData', ['items' => $cooData]);
    }

    public function updateCooData()
    {
        $coordinatorID = request('coordinatorID');
        $coordinatorName = request('coordinatorName');
        $coordinatorContactNo = request('coordinatorContactNo');
        $coordinatorEmail = request('coordinatorEmail');
        $expertise = request('expertise');


        DataEntryCoo::where('coordinatorID',$coordinatorID)
        ->update (['coordinatorName'=>$coordinatorName, 'coordinatorContactNo'=>$coordinatorContactNo, 'coordinatorEmail'=>$coordinatorEmail, 'expertise'=>$expertise]);

        return redirect('/viewCooData')->with('status', 'Coordinator Data Updated Successfully');
    }

    public function deleteCooData($coordinatorID)
    {
        $data = DataEntryCoo::select('*')->where('coordinatorID', '=', $coordinatorID)->delete();
        return redirect('/viewCooData')->with('status', 'Coordinator Data Deleted Successfully');
    }
}
