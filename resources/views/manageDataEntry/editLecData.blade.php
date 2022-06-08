@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    Edit Lecturer Data
    
    
    </div>
    <br>
    
    <div class="mt-6 text-gray-500">
    
    </div>
    
    
    @php
                        echo '<form action="/editLecData" method="POST" onsubmit="return confirm(\'Confirm Edit To Existing Data?\');">';
                    @endphp
  @csrf
    <label for="lecturerID" class="block text-sm font-medium text-gray-700">Lecturer ID</label>
    <input type="text" name="lecturerID" id="lecturerID" class=" block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->lecturerID }}" readonly> &nbsp
    
    <label for="lecturerName" class="block text-sm font-medium text-gray-700">Lecturer Name </label>
    <input type="text" name="lecturerName" id="lecturerName" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->lecturerName }}" readonly>&nbsp
    
    <label for="lecturerContactNo" class="block text-sm font-medium text-gray-700">Lecturer Contact No. </label>
    <input type="text" name="lecturerContactNo" id="lecturerContactNo" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->lecturerContactNo }}"required><br>

    <label for="lecturerEmail" class="block text-sm font-medium text-gray-700">Lecturer Email Address </label>
    <input type="text" name="lecturerEmail" id="lecturerEmail" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->lecturerEmail }}"required><br>

    <label for="superviseeName" class="block text-sm font-medium text-gray-700">Supervisee Name </label>
    <input type="text" name="superviseeName" id="superviseeName" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->superviseeName }}"required><br>
    
    <button class="button" type="submit" style="height:47px;">Update Data</button>
</form>
    
    
                
        

    
@endsection