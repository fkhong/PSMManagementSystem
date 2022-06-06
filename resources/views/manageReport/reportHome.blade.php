@extends('layouts.psmReport')
@section('content')
    

    <div class="mt-8 text-2xl">
    Search Report
    
    </div>

    <div class="mt-6 text-gray-500">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    </div>
<!-- EDIT HERE-->
<div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ url('/search') }}" method="GET" role="search">
                    
                        <input type="search" class="form-control mr-2" name="term" placeholder="Search ID" id="term" >
                        
                        <button class="button" type="submit">Search</button>
                        
                </form>
            </div>
            
           
        </div>
    </div>
    
    
                
        

    
@endsection