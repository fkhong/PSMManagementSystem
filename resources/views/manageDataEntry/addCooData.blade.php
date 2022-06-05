@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    Add Data Relevant to Final Year Project (Coordinator)
    <a href="/dataEntryCoo"><button class="button4" >Back</button></a>
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
  <form action="/addCooData" method="POST">
  @csrf
    <label for="coordinatorID" class="block text-sm font-medium text-gray-700">Coordinator ID</label>
    <input type="text" name="coordinatorID" id="coordinatorID" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="SA00001"> &nbsp
    
    <label for="coordinatorName" class="block text-sm font-medium text-gray-700">Coordinator Name</label>
    <input type="text" name="coordinatorName" id="coordinatorName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Chin">&nbsp
    
    <label for="coordinatorContactNo" class="block text-sm font-medium text-gray-700">Coordinator Contact No. </label>
    <input type="text" name="coordinatorContactNo" id="coordinatorContactNo" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="0101741111">&nbsp
    
    <label for="coordinatorEmail" class="block text-sm font-medium text-gray-700">Coordinator Email Address </label>
    <input type="text" name="coordinatorEmail" id="coordinatorEmail" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="chin@gmail.com">&nbsp
    
    <label for="expertise" class="block text-sm font-medium text-gray-700">Expertise </label>
    <input type="text" name="expertise" id="expertise" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="AI"><br>
    
    <input class="button" type="submit" value ="Save Coordinator Data"style="height:47px;">
</form>
<br>

  </div>
</div>
    </div>
    &nbsp&nbsp&nbsp
  


    @endsection