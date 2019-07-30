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
<form action="/personality" method="post" >
        @csrf
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Answer Your Personality Test</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>

                    <div class="col-lg-12" id="devel-generate-content-form">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">SOCIAL (S)</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                 
                                </div>
                            </header>
                            <div class="content-body">   
                             <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-primary">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>ARE YOU:</h4>
                                                    <span><small><sup></sup> </small></span>
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" value="" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">Friendly</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">Helpful</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">Idealistic</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">Insigntful about People</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">Outgoing with others</label>
                                                    </li> 

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">Understanding</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                           
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-purple">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>CAN YOU:</h4>
                                                 
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">
                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">Teach or train Others</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">Express feelings clearly</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">Lead a group discussion</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">Mediate disputes</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">Coperate well with others</label>
                                                    </li> 

                                                     <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">Work well in team or groups?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                         
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-orange">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>DO YOU LIKE TO:</h4>
                                                    
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">Use social & interpersonal skills</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">Help pepople with their problem</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">Lead groups</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">Use communication skills</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">Teach or train other</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">Provide support, empathy?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                               
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="checkone" id="edit-count-checked-checkboxes" placeholder="Total Score" readonly>


                                    </div>

                                </div>
                            </div>

                        </section>
                        </div>







                    <div class="col-lg-12" id="devel-generate-content-formtwo">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">ENTERPRISING (E)</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    
                            <div class="row">

                                   <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-primary">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>ARE YOU:</h4>
                                                    <span><small><sup></sup> </small></span>
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">self-confident</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">assertive</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">sociable</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">persuasive</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">enthusiastic</label>
                                                    </li> 

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">energertic?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                           
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-purple">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>CAN YOU:</h4>
                                                 
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">
                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">initiate projects</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">convince people to do things</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">sell things and promote ideas</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">give talk or speches</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">organize activities and events</label>
                                                    </li> 

                                                     <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">lead a group?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                         
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-orange">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>DO YOU LIKE TO:</h4>
                                                    
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">make dcisions affecting others</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">use energy or drive</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">give speeches or talk</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">use skills in arguments or debate</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">take risk</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">organize and lead others?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                               
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="checktwo" id="edit-count-checked-checkboxestwo" placeholder="Total Score" readonly>


                                    </div>

                                </div>
                            </div>

                        </section>
                        </div>







                    <div class="col-lg-12" id="devel-generate-content-formthree">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">CONVENTIONAL (C)</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    
                            <div class="row">

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-primary">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>ARE YOU:</h4>
                                                    <span><small><sup></sup> </small></span>
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">well-organized</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">accurate with details and numbers</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">interested in numbe crunching</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">methodical</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">conscientious about facts</label>
                                                    </li> 

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">efficient?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                           
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-purple">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>CAN YOU:</h4>
                                                 
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">
                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">work well within an organization</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">write reports</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">keep accurate records</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">use a computer terminal</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">perform calculations</label>
                                                    </li> 

                                                     <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">gather,organize and report data?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                         
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-orange">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>DO YOU LIKE TO:</h4>
                                                    
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">follow defined procedures</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">make chat,tables and graph</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">work with numbers</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">type or do word processing</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">classify and organize information</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">organize and lead others?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                               
                                            </div>
                                        </div>
                                        <input type="text" name="checkthree" class="form-control" id="edit-count-checked-checkboxesthree" placeholder="Total Score" readonly>


                                    </div>

                                </div>
                            </div>

                        </section>
                        </div>


                        <div class="col-lg-12" id="devel-generate-content-formfour">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">REALISTIC (R)</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    
                            <div class="row uiicons">
                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-primary">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>ARE YOU:</h4>
                                                    <span><small><sup></sup> </small></span>
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">practical</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">athletic</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">straightforward</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">mechanically incline</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">a nature lover</label>
                                                    </li> 

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">curious about the physical world?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                           
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-purple">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>CAN YOU:</h4>
                                                 
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">
                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">fix electrical things</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">slve mechanical things</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">pitch a tent</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">play a sport</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">read a blueprint</label>
                                                    </li> 

                                                     <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">operate tool and machinery?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                         
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-orange">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>DO YOU LIKE TO:</h4>
                                                    
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">tinker with machines</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">work outdoors</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">be physically active</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">work with your hands</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">build thimgs</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">work on cars?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                               
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="checkfour" id="edit-count-checked-checkboxesfour" placeholder="Total Score" readonly>


                                    </div>

                                </div>
                            </div>

                        </section>
                        </div>


                        <div class="col-lg-12" id="devel-generate-content-formfive">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">INVESTIGATIVE (I)</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    
                            <div class="row uiicons">
                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-primary">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>ARE YOU:</h4>
                                                    <span><small><sup></sup> </small></span>
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">inquisitive</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">analytical</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">scientific</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">obervant</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">logical</label>
                                                    </li> 

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">precise?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                           
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-purple">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>CAN YOU:</h4>
                                                 
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">
                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">think abstractly</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">solve math problems</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">understant physics and theory</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">do complex calculations</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">use a amicrscope</label>
                                                    </li> 

                                                     <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">interpret formulas?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                         
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-orange">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>DO YOU LIKE TO:</h4>
                                                    
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">explore ideas</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">use computers</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">work independently</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">perform lab experiment</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">read  scientific or technical novels</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">analyze data?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                               
                                            </div>
                                        </div>
                                        <input type="text" name="checkfive" class="form-control" id="edit-count-checked-checkboxesfive" placeholder="Total Score" readonly>


                                    </div>

                                </div>
                            </div>

                        </section>
                        </div>

                        <div class="col-lg-12" id="devel-generate-content-formsix">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">ARTISTIC (A)</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    
                            <div class="row uiicons">
                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-primary">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>ARE YOU:</h4>
                                                    <span><small><sup></sup> </small></span>
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">creative</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">intuitive</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">imaginative</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">innovative</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">sensitive</label>
                                                    </li> 

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">an individualist?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                           
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-purple">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>CAN YOU:</h4>
                                                 
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">
                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">sketch,draw,paint</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">use intuition</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">play a miusucal instrument</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">write stories,poetry,music</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">develpo nw ideas,approaches</label>
                                                    </li> 

                                                     <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">design fashion or interior?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                         
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">

                                        <div class="ultra-widget ultra-todo-task bg-orange">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class=""></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>DO YOU LIKE TO:</h4>
                                                    
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">


                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-1">solve problems in proginal ways</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">read fiction,plays,poetry</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">use verbal abilities to speak,act</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">take photography</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">use visualization abilities</label>
                                                    </li>

                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">express yourself creatively?</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                               
                                            </div>
                                        </div>
                                         <input type="text" name="checksix" class="form-control" id="edit-count-checked-checkboxessix" placeholder="Total Score" readonly>


                                    </div>

                                </div>
                            </div>
                        </section>
                        <input type="submit" class="btn btn-default" value="Submit">


</form>
                        </section>
                        </div>









        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 

        <script src="{{ asset('js/jquery-1.11.2.min.js') }}" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><script src="assets/plugins/count-to/countto.js" type="text/javascript"></script> <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 

       











        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

    <script>


	$(document).ready(function(){

    var $checkboxes = $('#devel-generate-content-form input[type="checkbox"]');
    var $checkboxestwo = $('#devel-generate-content-formtwo input[type="checkbox"]');
    var $checkboxesthree = $('#devel-generate-content-formthree input[type="checkbox"]');
    var $checkboxesfour = $('#devel-generate-content-formfour input[type="checkbox"]');
    var $checkboxesfive = $('#devel-generate-content-formfive input[type="checkbox"]');
    var $checkboxessix = $('#devel-generate-content-formsix input[type="checkbox"]');


        
    $checkboxes.change(function(){
        var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
        $('#count-checked-checkboxes').text(countCheckedCheckboxes);
        
        $('#edit-count-checked-checkboxes').val(countCheckedCheckboxes);
    });

    $checkboxestwo.change(function(){
        var countCheckedCheckboxestwo = $checkboxestwo.filter(':checked').length;
        $('#count-checked-checkboxestwo').text(countCheckedCheckboxestwo);
        
        $('#edit-count-checked-checkboxestwo').val(countCheckedCheckboxestwo);
    });

    $checkboxesthree.change(function(){
        var countCheckedCheckboxesthree = $checkboxesthree.filter(':checked').length;
        $('#count-checked-checkboxesthree').text(countCheckedCheckboxesthree);
        
        $('#edit-count-checked-checkboxesthree').val(countCheckedCheckboxesthree);
    });

    $checkboxesfour.change(function(){
        var countCheckedCheckboxesfour = $checkboxesfour.filter(':checked').length;
        $('#count-checked-checkboxesfour').text(countCheckedCheckboxesfour);
        
        $('#edit-count-checked-checkboxesfour').val(countCheckedCheckboxesfour);
    });

    $checkboxesfive.change(function(){
        var countCheckedCheckboxesfive = $checkboxesfive.filter(':checked').length;
        $('#count-checked-checkboxesfive').text(countCheckedCheckboxesfive);
        
        $('#edit-count-checked-checkboxesfive').val(countCheckedCheckboxesfive);
    });

    $checkboxessix.change(function(){
        var countCheckedCheckboxessix = $checkboxessix.filter(':checked').length;
        $('#count-checked-checkboxessix').text(countCheckedCheckboxessix);
        
        $('#edit-count-checked-checkboxessix').val(countCheckedCheckboxessix);
    });

});


        </script>

</html>



