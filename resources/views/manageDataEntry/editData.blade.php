@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    Edit Student Data
    
    
    </div>
    <br>
    
    <div class="mt-6 text-gray-500">
    
    </div>
    
    
    @php
                        echo '<form action="/editData" method="POST" onsubmit="return confirm(\'Confirm Edit To Existing Data?\');">';
                    @endphp
  @csrf
    <label for="studentId" class="block text-sm font-medium text-gray-700">Student ID</label>
    <input type="text" name="studentId" id="studentId" class=" block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->studentId }}" readonly> &nbsp
    
    <label for="studentName" class="block text-sm font-medium text-gray-700">Student Name </label>
    <input type="text" name="studentName" id="studentName" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->studentName }}" readonly>&nbsp
    
    <label for="fypTitle" class="block text-sm font-medium text-gray-700">FYP Title </label>
    <input type="text" name="fypTitle" id="fypTitle" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"placeholder="{{ $items->fypTitle }}">&nbsp
    
    <label for="courseName" class="block text-sm font-medium text-gray-700">Course Name </label>
    <input type="text" name="courseName" id="courseName" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"placeholder="{{ $items->courseName }}">&nbsp
    
    <label for="stdContactNo" class="block text-sm font-medium text-gray-700">Student Contact No. </label>
    <input type="text" name="stdContactNo" id="stdContactNo" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->stdContactNo }}"><br>

    <label for="stdEmail" class="block text-sm font-medium text-gray-700">Student Email Address </label>
    <input type="text" name="stdEmail" id="stdEmail" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->stdEmail }}"><br>

    <label for="supervisorName" class="block text-sm font-medium text-gray-700">Supervisor Name </label>
    <input type="text" name="supervisorName" id="supervisorName" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->supervisorName }}"><br>
    
    <button class="button" type="submit" style="height:47px;">Update Data</button>
</form>
    
    
                
        

    
@endsection