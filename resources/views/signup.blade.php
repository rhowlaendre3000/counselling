@include('includes.head')

@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- BEGIN BODY -->
    <body class=" login_page">


        <div class="register-wrapper">
            <div id="register" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
                <h1> CARRER EXPERTS </h1>

                <form name="loginform" id="loginform" action="/index" method="post">
                {{ csrf_field() }}
                    <p>
                        
                            <input type="text" Placeholder ="Enter First name" name="firstname" id="user_login" class="input" value="" size="20" /></label>
                    </p>
                    <p>
                        
                            <input type="text" Placeholder ="Enter Your Lastname" name="lastname" id="user_login" class="input" value="" size="20" /></label>
                    </p>

                    <p>
                        
                            <input type="text" Placeholder ="Enter Your Email" name="email" id="user_login" class="input" value="" size="20" /></label>
                            
                    </p>

                      <p>
                                <label for="user_pass">Educational Level<br />
                        <select class="form control" name="edulevel">
                        <option  disabled selected>Please Select Your Type Educational Level In Here </option>
                        <option>Basic Level</option>
                          <option>Secondary Level</option>
                           
                           </select>
                    </p>

                   <p>
                    <label for="user_pass">Select Age<br />
                    <input type="text" Placeholder ="Enter Age" name="age" id="user_login" class="input" size="20" /></label>
                       
                    </p>

                    

                    <p>
                            <input type="password" Placeholder ="Enter Your Password" name="password" id="user_pass" class="input" value="" size="20" /></label>
                    </p>
                    <p>
                        
                            <input type="password" Placeholder ="Confirm Password" name="password_confirmation" id="user_pass1" class="input" value="" size="20" /></label>
                    </p>
                   
                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign Up" />
                    </p>
                </form>

                <p id="nav">
                    <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="pull-right" href="{{url('/')}}" title="Sign Up">Sign In</a>
                </p>
             

            </div>
        </div>





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



