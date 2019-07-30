@extends('layouts.app')

@section('content')


<img src="{{ asset('images/library.jpeg')}}" style="height:250px; width:100%; margin-top:-22px;">

<div class="container-fluid" style="">

       
       

           
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                  <div class="row justify-content-md-center"style="padding-top:30px;">
                     
                   <div class="col-sm-8" style="text-align:center; margin-top:20px;">

                   <h3>Search for Course Material: </h3>
                    <form action="/home" method="get">

                        <div class="form-group">
                            <input  type="search" name="search" class="form-control">
                          

                        </div>
                        <button type="submit" class="btn btn-primary" style="">Search</button>
                    </form>

                          
                    
                      
                   </div>
                      </div>
                      
                     
                   </div>
                   
                   <div style="background-color:rgba(255,255,255,0.50);">

                   <h3 style="text-align:center; padding-bottom:0px; padding-top:30px;">Featured Course Materials.</h3><hr>
                   
                   <div class="row  justify-content"  >

                 
                      
                   @foreach($posts as $post)
                   <div class="col-sm-4" style="margin-bottom:10px; text-align:center;">
                        <div class="card" style="width: 23rem; padding:15px; border:2px solid blue;">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $post->title }}</h5>
                                <p class="card-text"> <img src="{{ asset('images/'.$post->image) }}" style="height:36px; width:175px;" /></p>
                                <p class="card-text">{{$post->description}}</p>
                               
                   
                   
                                <a href="{{ url('files/'.$post->file ) }}"> <button type="submit" class="btn btn-primary" style="">Download</button></a>
                             
                                <a href="{{ route('material.show',$post->id) }}">  <button type="submit" class="btn btn-primary" style="">View</button></a>
                                
                            </div>
                                </div>
                                
                   </div>

                  

               
                  
                  

                
                 
            
                                @endforeach
                               
                   </div>
                   </div>
        
              
</div>        

@endsection
