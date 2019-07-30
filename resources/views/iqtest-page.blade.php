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
                                <h3 class="title">This section includes a series of questions designed to test your knowledge</h3>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>








                    <div class="clearfix"></div>
                               
                                <h3 class="title pull-left"> SYNONYMS TEST</h3>
   
                            <div class="content-body">    
                             <div class="row uiicons">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <form action="/result" method="post">
                                        <input type="hidden" name="qhide" value="none" >
                                        @csrf

                                      
                                        <h4>GLUTINOUS</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="churlish" name="qone" type="radio"></td>
                                        <span>churlish</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="adhesive" name="qone" type="radio"></td>
                                        <span>adhersive</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="hungry" name="qone" type="radio"></td>
                                        <span>hungry</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="bright" name="qone" type="radio"></td>
                                        <span>bright</span>
                                            </div>


                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="desolate"name="qone" type="radio"></td>
                                        <span>desolate</span>
                                            </div>


                                             <h4>ILLUMINATING</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" name="qtwo" value="real" type="radio"></td>
                                        <span>real</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" name="qtwo" value="authentic" type="radio"></td>
                                        <span>authentic</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" name="qtwo" value="informative" type="radio"></td>
                                        <span>informative</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="rational" name="qtwo" type="radio"></td>
                                        <span>rational</span>
                                            </div>


                                            <div class="btn-group">
                                                <td class=""><input class="iCheck"  value="coherent" name="qtwo" type="radio"></td>
                                        <span>coherent</span>
                                            </div>


                                         <h4>ESPOUSAL</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="adoption" name="qthree" type="radio"></td>
                                        <span>adoption</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="authentic" name="qthree" type="radio"></td>
                                        <span>authentic</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="informative" name="qthree" type="radio"></td>
                                        <span>informative</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="rational" name="qthree" type="radio"></td>
                                        <span>rational</span>
                                            </div>


                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="coherent" name="qthree" type="radio"></td>
                                        <span>coherent</span>
                                            </div>


                                                     <h4>SIGNIFY</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="real" name="qfour" type="radio"></td>
                                        <span>real</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" name="qfour" value="connote"type="radio"></td>
                                        <span>Connote</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="informative" name="qfour" type="radio"></td>
                                        <span>informative</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="rational" name="qfour" type="radio"></td>
                                        <span>rational</span>
                                            </div>


                                            <div class="btn-group">
                                                <td class=""><input class="iCheck"  value="coherent" name="qfour" type="radio"></td>
                                        <span>coherent</span>
                                            </div>


                                          



                                             <h4>ERUDUTE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">

                                                 <td class=""><input class="iCheck"  value="scholarly" name="qfive" type="radio"></td>
                                        <span>scholarly</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="ancient" name="qfive" type="radio"></td>
                                        <span>ancient</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="distinguished" name="qfive" type="radio"></td>
                                        <span>distinguished</span>
                                            </div>

                                         


                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="coherent" name="qfive" type="radio"></td>
                                        <span>coherent</span>
                                            </div>


                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="careful" name="qfive" type="radio"></td>
                                        <span>careful</span>
                                            </div>




                                         <h4>IRRATIONAL</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="intransigent" name="qsix" type="radio"></td>
                                        <span>intransigent</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="unsafe" name="qsix" type="radio"></td>
                                        <span>unsafe</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="irredeemable" name="qsix" type="radio"></td>
                                        <span>irredeemable</span>
                                            </div>

                                        
                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="nonsensical" name="qsix" type="radio"></td>
                                        <span>nonsensical</span>
                                            </div>


                                  <h4>MODERATION</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="reticence" name="qseven" type="radio"></td>
                                        <span>reticence</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="equanimity" name="qseven" type="radio"></td>
                                        <span>equanimity</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="humility" name="qseven" type="radio"></td>
                                        <span>humility</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="care" name="qseven" type="radio"></td>
                                        <span>care</span>
                                            </div>


                                           

                                        <h4>PANORAMIC</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="extensive" name="qeight" type="radio"></td>
                                        <span>extensive</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="picturesque" name="qeight" type="radio"></td>
                                        <span>picturesque</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="distant" name="qeight" type="radio"></td>
                                        <span>distant</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="ceremonial" name="qeight" type="radio"></td>
                                        <span>ceremonial</span>
                                            </div>


                                           

                                        <h4>WEB</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="erode" name="qnine" type="radio"></td>
                                        <span>erode</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="create" name="qnine" type="radio"></td>
                                        <span>create</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="clothe" name="qnine" type="radio"></td>
                                        <span>clothe</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="lattice" name="qnine" type="radio"></td>
                                        <span>lattice</span>
                                            </div>


                                           

                                        <h4>SATIATE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="satiate" name="qten" type="radio"></td>
                                        <span>follow</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="overfill" name="qten" type="radio"></td>
                                        <span>overfill</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="censure"name="qten" type="radio"></td>
                                        <span>censure</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="veto" name="qten" type="radio"></td>
                                        <span>veto</span>
                                            </div>


                                           

                                        <h4>THOROUGHLY</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="attentively"name="qeleven" type="radio"></td>
                                        <span>attentively</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="assiduously" name="qeleven" type="radio"></td>
                                        <span>assiduously</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="long-winded" name="qeleven" type="radio"></td>
                                        <span>long-winded</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="eagerly" name="qeleven" type="radio"></td>
                                        <span>eagerly</span>
                                            </div>


                                           

                                        <h4>COGENCY</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="grace" name="qtwelve" type="radio"></td>
                                        <span>grace</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="competence" name="qtwelve" type="radio"></td>
                                        <span>competence</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="prestige" name="qtwelve" type="radio"></td>
                                        <span>prestige</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="force" name="qtwelve" type="radio"></td>
                                        <span>force</span>
                                            </div>


                                        <h4>DESIROUS</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="eager" name="qthirteen" type="radio"></td>
                                        <span>eager</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="eligible" name="qthirteen" type="radio"></td>
                                        <span>eligible</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="worthy" name="qthirteen" type="radio"></td>
                                        <span>worthy</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="fulsome" name="qthirteen" type="radio"></td>
                                        <span>fulsome</span>
                                            </div>


                                        <h4>SOJOURN</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="relief" name="qfourteen" type="radio"></td>
                                        <span>relief</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="holiday" name="qfourteen" type="radio"></td>
                                        <span>holiday</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="rest" name="qfourteen" type="radio"></td>
                                        <span>rest</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="breach" name="qfourteen" type="radio"></td>
                                        <span>breach</span>
                                            </div>


                                        <h4>PETRIFY</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="bedevil"name="qfifteen" type="radio"></td>
                                        <span>bedevil</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="calcify" name="qfifteen" type="radio"></td>
                                        <span>calcify</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="agitate" name="qfifteen" type="radio"></td>
                                        <span>agitate</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="decline" name="qfifteen" type="radio"></td>
                                        <span>decline</span>
                                            </div>




                                    </div>
                                    <br>

                                <h3 class="title pull-left">ANTONYMS TEST</h3>
                                </div> 
                                     <div class="col-md-12 col-sm-12 col-xs-12">

                                       
                                        <h4>CHECK</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="stay" name="qsixteen" type="radio"></td>
                                        <span>stay</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="accelerate" name="qsixteen" type="radio"></td>
                                        <span>accelerate</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="monitor" name="qsixteen" type="radio"></td>
                                        <span>monitor</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="foil" name="qsixteen" type="radio"></td>
                                        <span>foil</span>
                                            </div>


                                    <h4>INVARIABLE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="valueless" name="qseventeen" type="radio"></td>
                                        <span>valueless</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="viable" name="qseventeen" type="radio"></td>
                                        <span>viable</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="genuine" name="qseventeen" type="radio"></td>
                                        <span>genuine</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="flexible" name="qseventeen" type="radio"></td>
                                        <span>flexible</span>
                                            </div>

                                             

                                            <h4>RIBALD</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="genteel" name="qeighteen" type="radio"></td>
                                        <span>genteel</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="attractive" name="qeighteen"  type="radio"></td>
                                        <span>attractive</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="serious" name="qeighteen" type="radio"></td>
                                        <span>serious</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="ethical" name="qeighteen" type="radio"></td>
                                        <span>ethical</span>
                                            </div>


                                             <h4>TOUCHY</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="obedient" name="qnineteen" type="radio"></td>
                                        <span>obedient</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="fortunate" name="qnineteen" type="radio"></td>
                                        <span>fortunate</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="genial" name="qnineteen" type="radio"></td>
                                        <span>genial</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="sympathetic" name="qnineteen" type="radio"></td>
                                        <span>sympathetic</span>
                                            </div>


                                            
                                        <h4>BRUTAL</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="civil" name="qtwenty" type="radio"></td>
                                        <span>civil</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="democratic" name="qtwenty" type="radio"></td>
                                        <span>democratic</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" name="qtwenty" type="radio"></td>
                                        <span>patient</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" name="qtwenty" type="radio"></td>
                                        <span>varying</span>
                                            </div>


                                    <h4>UNACCOUNTABLE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="desirable" name="qtwentyone" type="radio"></td>
                                        <span>desirable</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="honest" name="qtwentyone" type="radio"></td>
                                        <span>honest</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="potent"name="qtwentyone" type="radio"></td>
                                        <span>potent</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="comprehensible" name="qtwentyone" type="radio"></td>
                                        <span>comprehensible</span>
                                            </div>

                                             

                                            <h4>WIDEN</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="prevent" name="qtwentytwo" type="radio"></td>
                                        <span>prevent</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="compress" name="qtwentytwo" type="radio"></td>
                                        <span>compress</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="encase" name="qtwentytwo" type="radio"></td>
                                        <span>encase</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck"  value="hinder" name="qtwentytwo" type="radio"></td>
                                        <span>hinder</span>
                                            </div>


                                    <h4>WORKABLE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="atypical" name="qtwentythree" type="radio"></td>
                                        <span>atypical</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="amateurish" name="qtwentythree" type="radio"></td>
                                        <span>amateurish</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="unfair" name="qtwentythree" type="radio"></td>
                                        <span>unfair</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="inconceivable" name="qtwentythree" type="radio"></td>
                                        <span>inconceivable</span>
                                            </div>

                                             
                                            <h4>BRUTAL</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="civil" name="qtwentyfour" type="radio"></td>
                                        <span>civil</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="humane" name="qtwentyfour" type="radio"></td>
                                        <span>humane</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="patient" name="qtwentyfour" type="radio"></td>
                                        <span>patient</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="varying" name="qtwentyfour" type="radio"></td>
                                        <span>varying</span>
                                            </div>


                                             <h4>PRODIGIOUS</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="tiny" name="qtwentyfive" type="radio"></td>
                                        <span>tiny</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="tight" name="qtwentyfive" type="radio"></td>
                                        <span>tight</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="inept" name="qtwentyfive" type="radio"></td>
                                        <span>inept</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="unproductive" name="qtwentyfive" type="radio"></td>
                                        <span>unproductive</span>
                                            </div>


                                         <h4>REMOTE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="abstract" name="qtwentysix" type="radio"></td>
                                        <span>abstract</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="vital" name="qtwentysix" type="radio"></td>
                                        <span>vital</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="related" name="qtwentysix" type="radio"></td>
                                        <span>related</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="adjacent"name="qtwentysix" type="radio"></td>
                                        <span>adjacent</span>
                                            </div>


                   



                                            <h4>HYPOTHETICALL</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck"  value="academic" name="qtwentyseven" type="radio"></td>
                                        <span>academic</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="cagey" name="qtwentyseven" type="radio"></td>
                                        <span>cagey</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="proven" name="qtwentyseven" type="radio"></td>
                                        <span>proven</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="punative" name="qtwentyseven" type="radio"></td>
                                        <span>punative</span>
                                            </div>


                                   <h4>IMMATURE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="old" name="qtwentyeight" type="radio"></td>
                                        <span>old</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck"value="mundane" name="qtwentyeight" type="radio"></td>
                                        <span>mundane</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="wise" name="qtwentyeight" type="radio"></td>
                                        <span>wise</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="mellow" name="qtwentyeight" type="radio"></td>
                                        <span>mellow</span>
                                            </div>


                                  <h4>EARTHLY</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="ethereal"name="qtwentynine" type="radio"></td>
                                        <span>ethereal</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="temporal" name="qtwentynine" type="radio"></td>
                                        <span>temporal</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="seasoned" name="qtwentynine" type="radio"></td>
                                        <span>seasoned</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="sensual" name="qtwentynine" type="radio"></td>
                                        <span>sensual</span>
                                            </div>



                                  <h4>DENIGRATE</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="acknowledge" name="qthirty" type="radio"></td>
                                        <span>acknowledge</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="welcome" name="qthirty" type="radio"></td>
                                        <span>welcome</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="enhance" name="qthirty" type="radio"></td>
                                        <span>enhance</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="eulogise" name="qthirty" type="radio"></td>
                                        <span>eulogise</span>
                                            </div>


                                             
                                            </div>
                                            <br>



                                <h3 class="title pull-left">NUMERIC TEST</h3>
                             
                                </div>
                         
                             
                                   <div class="row uiicons">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                         <h4>What is 15 multiplied by 11?</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="164" name="qthirtyone" type="radio"></td>
                                        <span>164</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="128" name="qthirtyone" type="radio"></td>
                                        <span>128</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="111" name="qthirtyone" type="radio"></td>
                                        <span>111</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="165" name="qthirtyone" type="radio"></td>
                                        <span>165</span>
                                            </div>

                                             <h4>What is 126 divided by 3?</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="42" name="qthirtytwo" type="radio"></td>
                                        <span>42</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="36" name="qthirtytwo" type="radio"></td>
                                        <span>36</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="44" name="qthirtytwo" type="radio"></td>
                                        <span>44</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="41" name="qthirtytwo" type="radio"></td>
                                        <span>41</span>
                                            </div>

                                             <h4>What is 9multiplied by 8?</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="34" name="qthirtythree" type="radio"></td>
                                        <span>34</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="72" name="qthirtythree" type="radio"></td>
                                        <span>72</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="89" name="qthirtythree" type="radio"></td>
                                        <span>89</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="65" name="qthirtythree" type="radio"></td>
                                        <span>65</span>
                                            </div>

                                             <h4>What is 45% of 300?</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="135" name="qthirtyfour" type="radio"></td>
                                        <span>135</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="134" name="qthirtyfour" type="radio"></td>
                                        <span>134</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="153" name="qthirtyfour" type="radio"></td>
                                        <span>153</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="143" name="qthirtyfour" type="radio"></td>
                                        <span>143</span>
                                            </div>

                                             <h4>Multiply 7 by 12 and divide by 6.</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="24" name="qthirtyfive" type="radio"></td>
                                        <span>24</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="14" name="qthirtyfive" type="radio"></td>
                                        <span>14</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="15" name="qthirtyfive" type="radio"></td>
                                        <span>15</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="20" name="qthirtyfive" type="radio"></td>
                                        <span>20</span>
                                            </div>

                                             <h4>Divide 56 by 8 and add 17.</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="24" name="qthirtysix" type="radio"></td>
                                        <span>24</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="21" name="qthirtysix" type="radio"></td>
                                        <span>21</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="23" name="qthirtysix" type="radio"></td>
                                        <span>23</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="32" name="qthirtysix" type="radio"></td>
                                        <span>32</span>
                                            </div>

                                             <h4>What is 35%of 250?</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="87" name="qthirtyseven" type="radio"></td>
                                        <span>87</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="87.5" name="qthirtyseven" type="radio"></td>
                                        <span>87.5</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="87.1" name="qthirtyseven" type="radio"></td>
                                        <span>87.1</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="80" name="qthirtyseven" type="radio"></td>
                                        <span>80</span>
                                            </div>


                                        <h4>Multiply 15 by 6 and subtract 29.</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="67" name="qthirtyeight" type="radio"></td>
                                        <span>67</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="56" name="qthirtyeight" type="radio"></td>
                                        <span>56</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="61" name="qthirtyeight" type="radio"></td>
                                        <span>61</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="60" name="qthirtyeight" type="radio"></td>
                                        <span>60</span>
                                            </div>


                                       <h4>What is 3206 divided by 7?</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="458" name="qthirtynine" type="radio"></td>
                                        <span>458</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="486" name="qthirtynine" type="radio"></td>
                                        <span>486</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="488" name="qthirtynine" type="radio"></td>
                                        <span>488</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="466" name="qthirtynine" type="radio"></td>
                                        <span>466</span>
                                            </div>


                                          <h4>Multiply 7 by 4 by 6.</h4>
                                        <div class="ui-dropdowns" data-example-id="split-button-dropdown">
                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="168" name="qforty" type="radio"></td>
                                        <span>168</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="164" name="qforty" type="radio"></td>
                                        <span>164</span>
                                            </div>

                                            <div class="btn-group">
                                                 <td class=""><input class="iCheck" value="166" name="qforty" type="radio"></td>
                                        <span>166</span>
                                            </div>

                                            <div class="btn-group">
                                                <td class=""><input class="iCheck" value="153" name="qforty" type="radio"></td>
                                        <span>153</span>
                                            </div>


                                </div>
                                <input type="submit" class="btn btn-default" value="Submit">
                        </form>
                            </div>
                        </section>
                    </div>







                    <button type="button" class="btn btn-default">Default</button>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
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
</html>



