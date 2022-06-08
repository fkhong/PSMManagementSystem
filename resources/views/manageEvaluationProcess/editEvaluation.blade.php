@extends('layouts.psmEvaluation')
@section('content')
    

    <div class="mt-8 text-2xl">
    Edit Evaluation 
    
    
    </div>
    <br>
    
    <div class="mt-6 text-gray-500">
    
    </div>
    
    
    @php
        echo '<form action="/editEvaluation" method="POST" onsubmit="return confirm(\'Confirm Edit To Existing Data?\');">';
    @endphp

    @csrf
    <label for="evaluationId" class="block text-sm font-medium text-gray-700">Evaluation ID</label>
    <input type="text" name="evaluationId" id="evaluationId" class="block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->evaluationId }}" readonly> &nbsp

    <label for="lecturerId" class="block text-sm font-medium text-gray-700">Lecturer ID</label>
    <input type="text" name="lecturerId" id="lecturerId" class="block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->lecturerId }}" readonly> &nbsp

    <label for="studentId" class="block text-sm font-medium text-gray-700">Student ID</label>
    <input type="text" name="studentId" id="studentId" class="block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->studentId }}" readonly> &nbsp
    
    <label for="studentName" class="block text-sm font-medium text-gray-700">Student Name</label>
    <input type="text" name="studentName" id="studentName" class="block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->studentName }}" readonly>&nbsp

    <label for="PSMTitle" class="block text-sm font-medium text-gray-700">PSM Title</label>
    <input type="text" name="PSMTitle" id="PSMTitle" class="block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->PSMTitle }}" readonly>&nbsp
    
    <label for="evaluationDate" class="block text-sm font-medium text-gray-700">Evaluation Date</label>
    <input type="date" name="evaluationDate" id="evaluationDate" class="block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->evaluationDate }}"required>&nbsp

    <label for="marksByCoordinator" class="block text-sm font-medium text-gray-700">Marks By Coordinator</label>
    <input type="number" step="0.01" min="0.00" name="marksByCoordinator" id="marksByCoordinator" class="block w-full  border-gray-300 rounded-md" style="height:40px;"placeholder="{{ $items->marksByCoordinator }}"required>&nbsp
    
    <label for="marksBySupervisor" class="block text-sm font-medium text-gray-700">Marks By Supervisor</label>
    <input type="number" step="0.01" min="0.00" name="marksBySupervisor" id="marksBySupervisor" class="block w-full  border-gray-300 rounded-md" style="height:40px;"placeholder="{{ $items->marksBySupervisor }}"required>&nbsp

    <label for="evaluationComments" class="block text-sm font-medium text-gray-700">Comment</label>
    <input type="text" name="evaluationComments" id="evaluationComments" class="block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->evaluationComment }}"required><br>
    
    <button class="button" type="submit" style="height:47px;">Update</button>
</form>
    
    
                
        

    
@endsection