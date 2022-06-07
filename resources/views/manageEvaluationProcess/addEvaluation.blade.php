@extends('layouts.psmEvaluation')
@section('content')
    

    <div class="mt-8 text-2xl">
    Add Evaluation 
    <a href="/psmEvaluation"><button class="button4" >Back</button></a>
    </div>
    
    <div class="mt-6 text-gray-500">
    <div>
  
    

  <div class="mt-1 relative rounded-md shadow-sm">
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
&nbsp
  <form action="/addEvaluation" method="POST">
  @csrf
    <label for="evaluationId" class="block text-sm font-medium text-gray-700">Evaluation ID</label>
    <input type="text" name="evaluationId" id="evaluationId" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="E0001">&nbsp

    <label for="lecturerId" class="block text-sm font-medium text-gray-700">Lecturer ID</label>
    <input type="text" name="lecturerId" id="lecturerId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="L0001">&nbsp

    <label for="studentId" class="block text-sm font-medium text-gray-700">Student ID</label>
    <input type="text" name="studentId" id="studentId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="S0001">&nbsp

    <label for="studentName" class="block text-sm font-medium text-gray-700">Student Name</label>
    <input type="text" name="studentName" id="studentName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Ali Mohammad">&nbsp

    <label for="PSMTitle" class="block text-sm font-medium text-gray-700">PSM Title</label>
    <input type="text" name="PSMTitle" id="PSMTitle" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="PSM Title">&nbsp

    <label for="evaluationDate" class="block text-sm font-medium text-gray-700">Evaluation Date</label>
    <input type="date" name="evaluationDate" id="evaluationDate" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"style="height:40px;">&nbsp

    <label for="evaluationMark" class="block text-sm font-medium text-gray-700">Evaluation Mark</label>
    <input type="number" step="0.01" min="0.00" name="evaluationMark" id="evaluationMark" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="27.00">&nbsp

    <label for="evaluationComment" class="block text-sm font-medium text-gray-700">Comment</label>
    <input type="text" name="evaluationComment" id="evaluationComment" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="Leave your comment here."><br>

    <input class="button" type="submit" value ="Submit"style="height:47px;">
  </form>
<br>

  </div>
</div>
    </div>
    &nbsp&nbsp&nbsp
  


    @endsection