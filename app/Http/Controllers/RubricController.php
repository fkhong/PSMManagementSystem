<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ManageRubric; 
use App\Models\DataEntryCoo;
use Illuminate\Support\Facades\Auth;

class RubricController extends Controller
{
    public function addRubric() {
        $data = DataEntryCoo::all();
        return view('manageRubric/addRubric',compact('data'));
    }

    public function storeRubric() {
        $rubricID = ManageRubric::where ('rubricID', '=', request('rubricID'))->first();

        if ($rubricID == null){
            $manageRubric = new ManageRubric();
            $manageRubric-> rubricID = request('rubricID');
            $manageRubric-> coordinatorID = request('coordinatorID');
            $manageRubric-> rubricDetail = request('rubricDetail');
            $manageRubric-> rubricMark = request('rubricMark');
            $manageRubric-> rubricCategory = request('rubricCategory');
            $manageRubric-> rubricDate = request('rubricDate');

            $manageRubric-> save();
            return redirect('/addRubric')->with('status', 'Rubric Added Successfully');
        }
    }

    public function updateRubric($rubricID){
        $rubric = ManageRubric::select('*')->where('rubricID', '=', $rubricID)->first();
        return view('manageRubric/updateRubric', ['items' => $rubric]);
    }

    public function editRubric() {
        $rubricID = request('rubricID');

        $coordinatorID = request('coordinatorID');
        $rubricDetail = request('rubricDetail');
        $rubricMark = request('rubricMark');
        $rubricCategory = request('rubricCategory');
        $rubricDate = request('rubricDate');

        ManageRubric::where('rubricID',$rubricID)
        ->update (['coordinatorID'=>$coordinatorID, 'rubricDetail'=>$rubricDetail,'rubricMark'=>$rubricMark,'rubricCategory'=>$rubricCategory, 'rubricDate'=>$rubricDate]);

        return redirect('/rubric')->with('status', 'Rubric Updated Successfully');
    }

    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '0') {
            return view('errorAccessStudent');
            
        }else if ($role == '1'){
            return view('errorAccessLecturer');
        }
        else {
            $data = ManageRubric::all();
            return view('manageRubric/rubricHome',['items'=>$data]);
        }
        
    }


}
