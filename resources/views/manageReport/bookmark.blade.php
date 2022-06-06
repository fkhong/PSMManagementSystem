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