@extends('layouts.psmDataEntry')
@section('content')
    

    <div class="mt-8 text-2xl">
    Edit Coordinator Data
    
    
    </div>
    <br>
    
    <div class="mt-6 text-gray-500">
    
    </div>
    
    
    @php
                        echo '<form action="/editCooData" method="POST" onsubmit="return confirm(\'Confirm Edit To Existing Data?\');">';
                    @endphp
  @csrf
    <label for="coordinatorID" class="block text-sm font-medium text-gray-700">Coordinator ID</label>
    <input type="text" name="coordinatorID" id="coordinatorID" class=" block w-full border-gray-300 rounded-md" style="height:40px;" value="{{ $items->coordinatorID }}" readonly> &nbsp
    
    <label for="coordinatorName" class="block text-sm font-medium text-gray-700">Coordinator Name </label>
    <input type="text" name="coordinatorName" id="coordinatorName" class=" block w-full  border-gray-300 rounded-md" style="height:40px;"value="{{ $items->coordinatorName }}" readonly>&nbsp
    
    <label for="coordinatorContactNo" class="block text-sm font-medium text-gray-700">Coordinator Contact No. </label>
    <input type="text" name="coordinatorContactNo" id="coordinatorContactNo" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->coordinatorContactNo }}"><br>

    <label for="coordinatorEmail" class="block text-sm font-medium text-gray-700">Coordinator Email Address </label>
    <input type="text" name="coordinatorEmail" id="coordinatorEmail" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->coordinatorEmail }}"><br>

    <label for="expertise" class="block text-sm font-medium text-gray-700">Expertise </label>
    <input type="text" name="expertise" id="expertise" class=" block w-full  border-gray-300 rounded-md"style="height:40px;" placeholder="{{ $items->expertise }}"><br>
    
    <button class="button" type="submit" style="height:47px;">Update Data</button>
</form>
    
    
                
        

    
@endsection