@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    View Lecturer Data
    <a href="/dataEntryLec"><button class="button4" >Back</button></a>
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
                            <th>Lecturer ID</th>
                            <th>Lecturer Name</th>
                            <th>Lecturer Contact No.</th>
                            <th>Lecturer Email</th>
                            <th>Superviee Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->lecturerID }}</td>
                                <td>{{ $item->lecturerName }}</td>
                                <td>{{ $item->lecturerContactNo }}</td>
                                <td>{{ $item->lecturerEmail }}</td>
                                <td>{{ $item->superviseeName }}</td>
                                <td>
                                    <a href="/editLecData/{{ $item->lecturerID }}" class="btn"><button type="button"
                                            class="button3"> <i class="fas fa-cog fa-sm"></i>Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <div >  

                                        <form action="/viewLecData/{{ $item->lecturerID }}" method="POST"
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