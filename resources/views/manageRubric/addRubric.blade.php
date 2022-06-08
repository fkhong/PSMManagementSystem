@extends('layouts.psmCalculation')
@section('content')
    

    <div class="mt-8 text-2xl">
    Add Rubric
    <a href="/rubric"><button class="button4" >Back</button></a>
    </div>

    <div class="mt-6 text-gray-500">
    
    </div>
    <!-- EDIT HERE-->
    <div class="mt-1 relative rounded-md shadow-sm">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    &nbsp
    <form action="/addRubric" method="POST">
    @csrf
        <label for="rubricID" class="block text-sm font-medium text-gray-700">Rubric ID</label>
        <input type="text" name="rubricID" id="rubricID" class=" block w-full border-gray-300 rounded-md" style="height:40px;" placeholder="PSM1001..."> &nbsp

        <label for="coordinatorID" class="block text-sm font-medium text-gray-700">Coordinator ID</label>
        <!--<input type="text" name="coordinatorID" id="coordinatorID" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="S0001...">&nbsp
-->
        
        <select name="coordinatorID" id = "coordinatorID" placeholder="coordinatorID" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            @foreach ($data as $dataR)
        <option name="coordinatorID" value="{{$dataR -> coordinatorID}}">{{$dataR -> coordinatorID}} {{$dataR -> coordinatorName}}</option>
            @endforeach
      </select><br>
        <label for="rubricDetail" class="block text-sm font-medium text-gray-700">Rubric Detail </label>
        <input type="text" name="rubricDetail" id="rubricDetail" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="Enter rubric detail...">&nbsp

        <label for="rubricMark" class="block text-sm font-medium text-gray-700">Rubric Mark </label>
        <input type="number" step="0.01" min="0.00" name="rubricMark" id="rubricMark" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;"placeholder="25.50...">&nbsp

        <label for="rubricCategory" class="block text-sm font-medium text-gray-700">Rubric Category </label>
        <select name="rubricCategory" id="rubricCategory" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
            <option value="">---Choose a Category---</option>
            <option value="PSM 1">PSM 1</option>
	        <option value="PSM 2">PSM 2</option>
	        <option value="PTA">PTA</option>
        </select>&nbsp

        <label for="rubricDate" class="block text-sm font-medium text-gray-700">Rubric Date </label>
        <input type="date" name="rubricDate" id="rubricDate" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"style="height:40px;"><br>

        <input class="button" type="submit" value ="Add Rubric"style="height:47px;">
    </form>
    <br>

    </div>
    &nbsp&nbsp&nbsp
                  
        

    
@endsection