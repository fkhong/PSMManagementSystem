@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    View Student Data
    <a href="/dataEntry"><button class="button4" >Back</button></a>
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
                            <th>Edit</th>
                            <th>Delete</th>
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
                                    <a href="/editData/{{ $item->studentId }}" class="btn"><button type="button"
                                            class="button3"> <i class="fas fa-cog fa-sm"></i>Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <div >  

                                        <form action="/viewData/{{ $item->studentId }}" method="POST"
                                            onsubmit="return confirm('Do you really want to delete?');">

                                            @csrf
                                            @method('DELETE')


                                            <button class="button2" type="submit"><i
                                                    class="fas fa-trash"></i>Delete</button>

                                        </form>
                                    </div>

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


    
@endsection