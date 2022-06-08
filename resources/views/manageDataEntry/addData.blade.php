@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    Add Data Relevant to Final Year Project (Student)
    <a href="/dataEntry"><button class="button4" >Back</button></a>
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
  <form action="/addData" method="POST">
  @csrf
    <label for="studentId" class="block text-sm font-medium text-gray-700">Student ID</label>
    <input type="text" name="studentId" id="studentId" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="CB19049"required> &nbsp
    
    <label for="studentName" class="block text-sm font-medium text-gray-700">Student Name</label>
    <input type="text" name="studentName" id="studentName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="CHEW MIN WEI"required>&nbsp
    
    <label for="fypTitle" class="block text-sm font-medium text-gray-700">Final year Project Title </label>
    <input type="text" name="fypTitle" id="fypTitle" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Stock Market Value Prediction"required>&nbsp
    
    <label for="courseName" class="block text-sm font-medium text-gray-700">Course Name </label>
    <input type="text" name="courseName" id="courseName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Software Engineering"required>&nbsp
    
    <label for="stdContactNo" class="block text-sm font-medium text-gray-700">Contact No. </label>
    <input type="text" name="stdContactNo" id="stdContactNo" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="0165518999"required>&nbsp
    
    <label for="stdEmail" class="block text-sm font-medium text-gray-700">Student Email Address </label>
    <input type="text" name="stdEmail" id="stdEmail" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"style="height:40px;" placeholder="aaroncmw@hotmail.com"required>&nbsp
    
    <label for="supervisorName" class="block text-sm font-medium text-gray-700">Supervisor Name </label>
    <input type="text" name="supervisorName" id="supervisorName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"style="height:40px;" placeholder="Dr. Kohbalan"required><br>

    <input class="button" type="submit" value ="Save Student Data"style="height:47px;">
</form>
<br>

  </div>
</div>
    </div>
    &nbsp&nbsp&nbsp
  


    @endsection