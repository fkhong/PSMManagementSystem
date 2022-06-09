@extends('layouts.psmRubric')
@section('content')
    

    <div class="mt-8 text-2xl">
    Update Rubric
    <a href="/rubric"><button class="button4" >Back</button></a>
    </div>

    <div class="mt-6 text-gray-500">
    
    </div>
    <!-- EDIT HERE-->
    @php
        echo '<form action="/updateRubric" method="POST" onsubmit="return confirm(\'Confirm Update To Existing Data?\');">';
    @endphp

    @csrf
    <label for="rubricID" class="block text-sm font-medium text-gray-700">Rubric ID</label>
    <input type="text" name="rubricID" id="rubricID" class=" block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->rubricID }}" readonly> &nbsp

    <label for="coordinatorID" class="block text-sm font-medium text-gray-700">Coordinator ID</label>
    <input type="text" name="coordinatorID" id="coordinatorID" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->coordinatorID }}"required>&nbsp

    <label for="rubricDetail" class="block text-sm font-medium text-gray-700">Rubric Detail </label>
    <input type="text" name="rubricDetail" id="rubricDetail" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->rubricDetail }}"required>&nbsp

    <label for="rubricMark" class="block text-sm font-medium text-gray-700">Rubric Mark </label>
    <input type="number" step="0.01" min="0.00" name="rubricMark" id="rubricMark" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->rubricMark }}"required>&nbsp

    <label for="rubricCategory" class="block text-sm font-medium text-gray-700">Rubric Category </label>
    <select name="rubricCategory" id="rubricCategory" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" style="height:40px;">
        <option value="">---Choose a Category---</option>
        <option value="PSM 1">PSM 1</option>
	    <option value="PSM 2">PSM 2</option>
	    <option value="PTA">PTA</option>
    </select>&nbsp

    <label for="rubricDate" class="block text-sm font-medium text-gray-700">Rubric Date </label>
    <input type="date" name="rubricDate" id="rubricDate" class=" block w-full  border-gray-300 rounded-md"style="height:40px;"required><br>

    <button class="button" type="submit" style="height:47px;">Update Rubric</button>
</form>
        

    
@endsection