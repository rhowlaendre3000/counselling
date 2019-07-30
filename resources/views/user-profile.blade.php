@include('includes.head')

<!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>

            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                
                </div>		
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                           
                            
                            </a>
                           
                            
                                <li class="last">
                                <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                              


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        
                                    </a>
                                </li>
                                
                                </ul>			
                            </div>		
                        </div>
                     </div>

                       </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                           
                              
                        
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                               
                                <a>{{ $profile->firstname }} {{$profile->lastname}}</a>
                                   
                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Career Analysis System </p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>   


                        <li class="open"> 
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">email: {{ $profile->email}}</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="widgets.html">
                                <i class="fa fa-th"></i>
                                <span class="title">Age: {{$profile->age}} </span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-folder-open"></i>
                                <span class="title">Educational Level: {{$profile->edulevel}} </span>
                             
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                               
                            </a>
                            
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                               
                            </a>
                          
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
   
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                               
                            </a>
                           
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                           
                            
                          
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                            
                            </a>
                          
                        </li>

                               
                                               
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="project-info">

                </div>



            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Select One Please</h1>                           

                                 </div>

                        </div>
                    </div>
       
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-thumbs-up icon-md icon-rounded icon-primary'></i>
                                            <div class="stats">
                                
                                                <a class="pull-right" href="{{url('index')}}" title="Sign Up"><h4><strong>Check IQ Level</strong></h4></a>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-thumbs-up icon-md icon-rounded icon-default'></i>
                                            <div class="stats">
                                                
                                                <a class="pull-right" href="{{route('personality.index')}}" title="Sign Up"><h4><strong>Check Your Personality</strong></h4></a>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                            <div class="stats">
                                                
                                            <a class="pull-right" href="{{route('schorlastic.index')}}" title="Sign Up"><h4><strong>Upload Your Scholastic</strong></h4></a>
                                               
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-users icon-md icon-rounded icon-default'></i>
                                            <div class="stats">
                                                <h4><strong></strong></h4>
                                                <a class="pull-right" href="{{route('result.index')}}" title="Sign Up"><h4><strong>Your Career</strong></h4></a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End .row -->    

                </section>
            </section>
            <!-- END CONTENT -->
          

                   



     
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="{{ asset('js/jquery.easing.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>  
        <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="{{ asset('plugins/icheck/icheck.min.js')  }}" type="text/javascript"></script>



        <!-- CORE TEMPLATE JS - START --> 
        <script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="{{ asset('plugins/sparkline-chart/jquery.sparkline.min.js')  }}" type="text/javascript"></script>
        <script src="{{ asset('js/sparkline-chart/chart-sparkline.js')  }}" type="text/javascript"></script>

        <!-- Sidebar Graph - END -->
    </body>
</html>





<script type="text/javascript">


</script>