@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif


    <div class="row">
       
    

       <div class="col-sm-6 col-sm-offset-3"> 	
      <div class="card">
      <div class="card-header">
              Add Course Materials
      </div>
          <div class="card-body">
              
              <form method="post" action="/material" enctype="multipart/form-data">
              {{ csrf_field() }}
              @include('includes.materialform')
              </form>
                  
</div>	
          </div>
    </div>




   
   

<div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Available Course Material 
    	</div>
    		<div class="card-body">
                <div class="table">
                    <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>Course</th>
                                    <th>Title</th>
                                 
                              </tr>
                        </thead>

                        <tbody>
                        @foreach($user->programme->material as $users)
                              <tr>
                              <td>  {{ $users->course->coursetitle }} </td>
                              <td> <a href="{{ route('material.show', $users->id) }} "> {{ $users->title }} </a></td>
                                        
                              </tr>
                              @endforeach
                        </tbody>
                        
                    </table>

                </div>
                
					
</div>	
            </div>
      </div>


 
      <div>
    
   
   </div>

 @endsection