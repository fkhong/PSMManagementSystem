@extends('layouts.psmEvaluation')
@section('content')
    

    <div class="mt-8 text-2xl">
    View Evaluation
    <a href="/psmEvaluation"><button class="button4" >Back</button></a>
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
                            <th>Evaluation ID</th>
                            <th>Lecturer ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>PSM Title</th>
                            <th>Evaluation Date</th>
                            <th>Evaluation Mark</th>
                            <th>Comment</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->evaluationId }}</td>
                                <td>{{ $item->lecturerId }}</td>
                                <td>{{ $item->studentId }}</td>
                                <td>{{ $item->studentName }}</td>
                                <td>{{ $item->PSMTitle }}</td>
                                <td>{{ $item->evaluationDate }}</td>
                                <td>{{ $item->evaluationMark }}</td>
                                <td>{{ $item->evaluationComment }}</td>
                                <td>
                                    <a href="/editEvaluation/{{ $item->evaluationId }}" class="btn"><button type="button"
                                            class="button3"> <i class="fas fa-cog fa-sm"></i>Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <div >  

                                        <form action="/viewEvaluation/{{ $item->evaluationId }}" method="POST"
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