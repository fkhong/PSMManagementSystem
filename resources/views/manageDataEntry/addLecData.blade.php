@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    Add Data Relevant to Final Year Project (Lecturer)
    <a href="/dataEntryLec"><button class="button4" >Back</button></a>
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
  <form action="/addLecData" method="POST">
  @csrf
    <label for="lecturerID" class="block text-sm font-medium text-gray-700">Lecturer ID</label>
    <input type="text" name="lecturerID" id="lecturerID" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="SA00000"> &nbsp
    
    <label for="lecturerName" class="block text-sm font-medium text-gray-700">Lecturer Name</label>
    <input type="text" name="lecturerName" id="lecturerName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Toh">&nbsp
    
    <label for="lecturerContactNo" class="block text-sm font-medium text-gray-700">lecturer Contact No. </label>
    <input type="text" name="lecturerContactNo" id="lecturerContactNo" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="0101740000">&nbsp
    
    <label for="lecturerEmail" class="block text-sm font-medium text-gray-700">Lecturer Email Address </label>
    <input type="text" name="lecturerEmail" id="lecturerEmail" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="toh@gmail.com">&nbsp
    
    <label for="superviseeName" class="block text-sm font-medium text-gray-700">Supervisee Name </label>
    <input type="text" name="superviseeName" id="superviseeName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="CHEW MIN WEI"><br>
    
    <input class="button" type="submit" value ="Save Lecturer Data"style="height:47px;">
</form>
<br>

  </div>
</div>
    </div>
    &nbsp&nbsp&nbsp
  


    @endsection