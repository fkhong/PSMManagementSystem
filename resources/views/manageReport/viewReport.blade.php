@extends('layouts.psmReport')
@section('content')
    

    <div class="mt-8 text-2xl">
    Student Report
    <a href="/report"><button class="button4" >Back</button></a>
    </div>

    <div class="mt-6 text-gray-500">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    </div>
    &nbsp&nbsp&nbsp
    <table id="itemList" style="width:100%">
                    <thead>

                        <tr style="height:45px; " >
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>FYP Title</th>
                            <th>Course Name</th>
                            <th>Student Contact No.</th>
                            <th>Student Email</th>
                            <th>Supervisor Name</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->studentId }}</td>
                                <td>{{ $item->studentName }}</td>
                                <td>{{ $item->fypTitle }}</td>
                                <td>{{ $item->courseName }}</td>
                                <td>{{ $item->stdContactNo }}</td>
                                <td>{{ $item->stdEmail }}</td>
                                <td>{{ $item->supervisorName }}</td>
                                <td>
                                    <a href="/bookmarked/{{ $item->studentId }}" class="btn" ><button type="button" class="button"> 
                                        <i class="fas fa-cog fa-sm"></i>Bookmark
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
    
    
                <br><br>
                <div class="mt-8 text-2xl">
    Student's PSM Evaluation
    </div><br>
                <table id="itemList" style="width:100%">
                    <thead>

                        <tr style="height:45px; " >
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>FYP Title</th>
                            <th>Date of Evaluation</th>
                            <th>Marks By Coordinator</th>
                            <th>Marks By Supervisor</th>
                            <th>Comments</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($edata as $item2)
                            <tr style="height:60px; ">
                                <td>{{ $item2->studentId }}</td>
                                <td>{{ $item2->studentName }}</td>
                                <td>{{ $item2->PSMTitle }}</td>
                                <td>{{ $item2->evaluationDate }}</td>
                                <td>{{ $item2->marksByCoordinator }}</td>
                                <td>{{ $item2->marksBySupervisor }}</td>
                                <td>{{ $item2->evaluationComments }}</td>
                                
                                
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
                <br><br>

                <div class="mt-8 text-2xl">
    Student's Industrial Evaluation
    </div><br>
                <table id="itemList" style="width:100%">
                    <thead>

                        <tr style="height:45px; " >
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>FYP Title</th>
                            <th>Date of Industrial Evaluation</th>
                            <th>Time of Industrial Evaluation</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($iedata as $item3)
                            <tr style="height:60px; ">
                                <td>{{ $item3->studentId }}</td>
                                <td>{{ $item3->studentName }}</td>
                                <td>{{ $item3->PSMTitle }}</td>
                                <td>{{ $item3->ieDate }}</td>
                                <td>{{ $item3->ieTime }}</td>
                                
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
                <br><br>
    
@endsection
