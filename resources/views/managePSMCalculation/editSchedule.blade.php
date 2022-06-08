@extends('layouts.psmCalculation')
@section('content')
    

    <div class="mt-8 text-2xl">
    Edit Industrial Evaluation Schedule
    
    
    </div>
    <br>
    
    <div class="mt-6 text-gray-500">
    
    </div>
    
    
    @php
                        echo '<form action="/editSchedule" method="POST" onsubmit="return confirm(\'Confirm Edit To Existing Data?\');">';
                    @endphp
  @csrf
  <label for="industrialEvaluationId" class="block text-sm font-medium text-gray-700">Industrial Evaluation ID</label>
    <input type="text" name="industrialEvaluationId" id="industrialEvaluationId" class=" block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->industrialEvaluationId }}" readonly> &nbsp
    <label for="studentId" class="block text-sm font-medium text-gray-700">Student ID</label>
    <input type="text" name="studentId" id="studentId" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->studentId }}" readonly>&nbsp
    <label for="studentName" class="block text-sm font-medium text-gray-700">Student Name </label>
    <input type="text" name="studentName" id="studentName" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->studentName }}" readonly>&nbsp
    <label for="PSMTitle" class="block text-sm font-medium text-gray-700">PSM Title </label>
    <input type="text" name="PSMTitle" id="PSMTitle" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->PSMTitle }}" readonly>&nbsp
    <label for="ieDate" class="block text-sm font-medium text-gray-700">Industrial Evaluation Date </label>
    <input type="text" name="ieDate" id="ieDate" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"placeholder="{{ $items->ieDate }}"required>&nbsp
    <label for="ieTime" class="block text-sm font-medium text-gray-700">Industrial Evaluation Time </label>
    <input type="text" name="ieTime" id="ieTime" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->ieTime }}"required><br>
    <button class="button" type="submit" style="height:47px;">Update Schedule</button>
</form>
    
    
                
        

    
@endsection