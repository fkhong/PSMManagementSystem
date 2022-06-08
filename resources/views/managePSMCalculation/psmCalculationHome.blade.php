@extends('layouts.psmCalculation')
@section('content')
    

    <div class="mt-8 text-2xl">
    Students' PSM Score
    </div>

    <div class="mt-6 text-gray-500">
    <div style="font-size : 25px">

</div>
    <a href="/addSchedule"><button class="button">Add Schedule</button></a>&nbsp&nbsp&nbsp
    <a href="/viewSchedule"><button class="button">View Schedule</button></a>
    
    </div>
    &nbsp&nbsp&nbsp
    
    

    <table id="itemList" style="width:100%">
                    <thead>

                        <tr style="height:45px; " >
                            <th>Evaluation ID</th>
                            
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>PSM Title</th>
                            <th>Evaluation Date</th>
                            <th>Marks By Coordinator</th>
                            <th>Marks By Supervisor</th>
                            
                            <th>Calculate Total Marks</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->evaluationId }}</td>
                                
                                <td>{{ $item->studentId }}</td>
                                <td>{{ $item->studentName }}</td>
                                <td>{{ $item->PSMTitle }}</td>
                                <td>{{ $item->evaluationDate }}</td>
                                <td>{{ $item->marksByCoordinator }}</td>
                                <td>{{ $item->marksBySupervisor }}</td>
                                
                                <td>
                                    <a href="/editEvaluation/{{ $item->studentId }}" class="btn"><button type="button"
                                            class="button3"> <i class="fas fa-cog fa-sm"></i>Calculate
                                        </button>
                                    </a>
                                </td>
                              
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot style="display:none;">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>


                </table>
                <br>

@endsection