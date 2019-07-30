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
    			Add Courses
    	</div>
    		<div class="card-body">
                
                <form method="post" action="/course">
                {{ csrf_field() }}
                @include('includes.courseform')
                </form>
					
</div>	
            </div>
      </div>

<div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Available Courses 
    	</div>
    		<div class="card-body">
                <div class="table">
                    <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>Name</th>
                                 
                              </tr>
                        </thead>

                        <tbody>
                        @foreach($user->programme->course as $users)
                              <tr>
                                   
                              <td>  {{ $users->coursetitle }}</td>
                                         
                              </tr>
                              @endforeach
                        </tbody>
                        
                    </table>

                </div>
                
					
</div>	
            </div>
      </div>

</div>



</div>
@endsection