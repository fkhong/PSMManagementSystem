@extends('layouts.psmCalculation')
@section('content')
    

    <div class="mt-8 text-2xl">
    Add Industrial Evaluation Schedule 
    <a href="/psmCalculation"><button class="button4" >Back</button></a>
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
  <form action="/addSchedule" method="POST">
  @csrf
  <label for="industrialEvaluationId" class="block text-sm font-medium text-gray-700">Industrial Evaluation ID</label>
    <input type="text" name="industrialEvaluationId" id="industrialEvaluationId" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="IE000"required> &nbsp
    <label for="studentId" class="block text-sm font-medium text-gray-700">Student ID</label>
    <!--<input type="text" name="studentId" id="studentId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="S000">&nbsp
-->
    <select name="studentId" id = "studentId" placeholder="studentId" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($data as $data2)
        <option name="studentId" value="{{$data2 -> studentId}}">{{$data2 -> studentId}}  {{$data2 -> studentName}}</option>
            @endforeach
      </select><br>
    
    <label for="studentName" class="block text-sm font-medium text-gray-700">Student Name </label>
    <!--<input type="text" name="studentName" id="studentName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Foong KH">&nbsp
-->
    <select name="studentName" id = "studentName" placeholder="studentName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($data as $data2)
        <option name="studentName" value="{{$data2 -> studentName}}">{{$data2 -> studentId}}  {{$data2 -> studentName}}</option>
            @endforeach
      </select><br>


    <label for="PSMTitle" class="block text-sm font-medium text-gray-700">PSM Title </label>
    <!--<input type="text" name="PSMTitle" id="PSMTitle" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Title">&nbsp
-->
    <select name="PSMTitle" id = "PSMTitle" placeholder="PSMTitle" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($data as $data2)
        <option name="PSMTitle" value="{{$data2 -> PSMTitle}}">{{$data2 -> studentId}}  {{$data2 -> PSMTitle}}</option>
            @endforeach
      </select><br>

    
    <label for="ieDate" class="block text-sm font-medium text-gray-700">Industrial Evaluation Date </label>
    <input type="date" name="ieDate" id="ieDate" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="dd/MM/yy"required>&nbsp
    <label for="ieTime" class="block text-sm font-medium text-gray-700">Industrial Evaluation Time </label>
    <input type="time" name="ieTime" id="ieTime" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"style="height:40px;" placeholder="0000"required><br>
    <input class="button" type="submit" value ="Save Schedule"style="height:47px;">
</form>
<br>

  </div>
</div>
    </div>
    &nbsp&nbsp&nbsp
  


    @endsection