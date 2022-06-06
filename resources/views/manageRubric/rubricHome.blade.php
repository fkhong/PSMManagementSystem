@extends('layouts.psmCalculation')
@section('content')
    

    <div class="mt-8 text-2xl">
        Manage Rubric
    
    </div>

    <div class="mt-6 text-gray-500">
    
    </div>

    <!-- EDIT HERE-->
    <a href="/addRubric"><button class="button">Add Rubric</button></a>&nbsp&nbsp&nbsp

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
                            <th>Rubric ID</th>
                            <th>Staff ID</th>
                            <th>Rubric Detail</th>
                            <th>Rubric Mark</th>
                            <th>Rubric Category</th>
                            <th>Rubric Date</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->rubricID }}</td>
                                <td>{{ $item->staffID }}</td>
                                <td>{{ $item->rubricDetail }}</td>
                                <td>{{ $item->rubricMark }}</td>
                                <td>{{ $item->rubricCategory }}</td>
                                <td>{{ $item->rubricDate }}</td>
                                <td>
                                    <a href="/updateRubric/{{ $item->rubricID }}" class="btn"><button type="button"
                                            class="button3"> <i class="fas fa-cog fa-sm"></i>Update
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
                        </tr>
                    </tfoot>


    </table>
    
    
    
                
        

    
@endsection