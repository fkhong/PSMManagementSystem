@extends('layouts.psmReport')
@section('content')

    <div class="mt-8 text-2xl">
    Search Report
    <p class='status'>{{session('status')}}</p>
    
    </div>

    <div class="mt-6 text-gray-500">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    </div>
<!-- EDIT HERE-->
<div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ url('/search') }}" method="GET" role="search">
                        <input type="search" class="form-control mr-2" name="term" placeholder="Search ID" id="term" required>
                        <button class="button" type="submit">Search</button>
                </form>
                
                
            </div>
            
           
        </div>
    </div>  
    <div class="mt-8 text-2xl">
    Bookmarked Student Details
    </div> <br>

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
                            <th>Removal</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->studentId }}</td>
                                <td>{{ $item->studentName }}</td>
                                <td>{{ $item->fypTitle }}</td>
                                <td>{{ $item->courseName }}</td>
                                <td>{{ $item->stdContactNo }}</td>
                                <td>{{ $item->stdEmail }}</td>
                                <td>{{ $item->supervisorName }}</td>
                                <td>
                                    <a href="/unbookmarked/{{ $item->studentId }}" class="btn" ><button type="button" class="button2"> 
                                        <i class="fas fa-cog fa-sm"></i>Remove Bookmark
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