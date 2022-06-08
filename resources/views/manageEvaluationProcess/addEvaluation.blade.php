@extends('layouts.psmEvaluation')
@section('content')
    

    <div class="mt-8 text-2xl">
    Add Evaluation 
    <a href="/evaluationProcess"><button class="button4" >Back</button></a>
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
    <!--<input type="text" name="lecturerId" id="lecturerId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="L0001">&nbsp
-->

      <select name="lecturerId" id = "lecturerId" placeholder="lecturerId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($lecturerDetails as $lecturerDetailsE)
        <option name="lecturerId" value="{{$lecturerDetailsE -> lecturerID}}">{{$lecturerDetailsE -> lecturerID}} {{$lecturerDetailsE -> lecturerName}}</option>
            @endforeach
      </select><br>

    <label for="studentId" class="block text-sm font-medium text-gray-700">Student ID</label>
    <!--<input type="text" name="studentId" id="studentId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="S0001">&nbsp
-->
<select name="studentId" id = "studentId" placeholder="studentId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($studentDetails as $studentDetailsE)
        <option name="studentId" value="{{$studentDetailsE -> studentId}}">{{$studentDetailsE -> studentId}} {{$studentDetailsE -> studentName}}</option>
            @endforeach
      </select><br>

    <label for="studentName" class="block text-sm font-medium text-gray-700">Student Name</label>
    <!--<input type="text" name="studentName" id="studentName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Ali Mohammad">&nbsp
-->

<select name="studentName" id = "studentName" placeholder="studentName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($studentDetails as $studentDetailsE)
        <option name="studentName" value="{{$studentDetailsE -> studentName}}">{{$studentDetailsE -> studentId}}  {{$studentDetailsE -> studentName}}</option>
            @endforeach
      </select><br>

    <label for="PSMTitle" class="block text-sm font-medium text-gray-700">PSM Title</label>
    <!--<input type="text" name="PSMTitle" id="PSMTitle" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="PSM Title">&nbsp
-->

<select name="PSMTitle" id = "PSMTitle" placeholder="PSMTitle" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($studentDetails as $studentDetailsE)
        <option name="PSMTitle" value="{{$studentDetailsE -> fypTitle}}">{{$studentDetailsE -> studentId}}  {{$studentDetailsE -> fypTitle}}</option>
            @endforeach
      </select><br>

    <label for="evaluationDate" class="block text-sm font-medium text-gray-700">Evaluation Date</label>
    <input type="date" name="evaluationDate" id="evaluationDate" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"style="height:40px;">&nbsp

    <label for="marksByCoordinator" class="block text-sm font-medium text-gray-700">Marks By Coordinator</label>
    <input type="number" step="0.01" min="0.00" name="marksByCoordinator" id="marksByCoordinator" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="27.00">&nbsp

    <label for="marksBySupervisor" class="block text-sm font-medium text-gray-700">Marks By Supervisor</label>
    <input type="number" step="0.01" min="0.00" name="marksBySupervisor" id="marksBySupervisor" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="27.00">&nbsp

    <label for="evaluationComments" class="block text-sm font-medium text-gray-700">Comment</label>
    <input type="text" name="evaluationComments" id="evaluationComments" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="Leave your comment here."><br>

    <input class="button" type="submit" value ="Submit"style="height:47px;">
  </form>
<br>

  </div>
</div>
    </div>
    &nbsp&nbsp&nbsp
  


    @endsection