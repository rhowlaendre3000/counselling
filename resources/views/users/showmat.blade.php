@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif


    <div class="row">
       
    


<div class="col-sm-12 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Available Course Material 
    	</div>
    		<div class="card-body">
                <div class="row">
                    
                    <div class="col-sm-4">
                      
                    <img src="{{ asset('images/'.$material->image) }}" style="height:150px; width:175px; margin-bottom:20px;"/>
                    <p><a href="{{url('files/'.$material->file )}}"><button type="submit" class="btn btn-primary">Download</button></a></p>
                      

                    </div>
                   
                    <div class="col-sm-8">
                    
                    
                    <p><strong> Title of Course Material :</strong> {{ $material->title }}</p>
                      
                    <p><strong> Course Name:</strong> {{ $material->course->coursetitle }}</p>
                       
                    <p><strong> Programme:</strong> {{ $material->programme->programmename }}</p>
                    <p><strong> Description:</strong> {{ $material->description }}</p>

                  

            
                    </div>
                </div>
                
					
</div>	
            </div>
      </div>


 
      <div>
    
   
   </div>

 @endsection