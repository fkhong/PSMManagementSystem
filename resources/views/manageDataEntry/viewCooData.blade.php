@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    View Coordinator Data
    <a href="/dataEntryCoo"><button class="button4" >Back</button></a>
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
                            <th>Coordinator ID</th>
                            <th>Coordinator Name</th>
                            <th>Coordinator Contact No.</th>
                            <th>Coordinator Email</th>
                            <th>Expertise</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr style="height:60px; ">
                                <td>{{ $item->coordinatorID }}</td>
                                <td>{{ $item->coordinatorName }}</td>
                                <td>{{ $item->coordinatorContactNo }}</td>
                                <td>{{ $item->coordinatorEmail }}</td>
                                <td>{{ $item->expertise }}</td>
                                <td>
                                    <a href="/editCooData/{{ $item->coordinatorID }}" class="btn"><button type="button"
                                            class="button3"> <i class="fas fa-cog fa-sm"></i>Edit
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <div >  

                                        <form action="/viewCooData/{{ $item->coordinatorID }}" method="POST"
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