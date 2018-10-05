<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Admin Login</title>
        <meta name="description" content="Photo Gallery ">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="{{URL::to('public/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('public/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link id="base-style" href="{{URL::to('public/css/style.css')}}" rel="stylesheet">
        <link id="base-style-responsive" href="{{URL::to('public/css/style-responsive.css')}}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/img/favicon.ico')}}">
        <!-- end: Favicon -->

        <style type="text/css">
            body { background: url("{{URL::to('public/img/bg-login.jpg')}}") !important; }
        </style>



    </head>

    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="login-box">
                        <div class="icons">
                            <a href="{{URL::to('/')}}"><i class="halflings-icon home"></i></a>
                            <a href="#"><i class="halflings-icon cog"></i></a>
                        </div>
                        <h3 style="color:red; font-weight: bold;">
                            
                            <?php
                            
                            $exc = Session::get('exception');
                            if($exc){
                                echo $exc;
                                Session::put('exception',null);
                            }
                                ?>
                        </h3>
                        
                        <h3 style="color:green;  font-weight: bold;">
                            
                            <?php
                            
                            $msg = Session::get('message');
                            if($msg){
                                echo $msg;
                                Session::put('message',null);
                            }
                                ?>
                        </h3>
                        <h2>Login to your account</h2>

 {!! Form::open(['url'=>'/login-check','method'=>'post','class'=>'form-horizontal']) !!}
                        <fieldset>

                            <div class="input-prepend" title="txtadminemail">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
             <input class="input-large span10" name="txtadminemail" id="username" type="text" placeholder="type Email"/>
                            </div>

                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
             <input class="input-large span10" name="txtpassword" id="password" type="password" placeholder="type password"/>
                            </div>
                            <div class="clearfix"></div>

                            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                            <div class="button-login">	
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                            {!! Form::close() !!}

                            </form>
                            <hr>
                            <h3>Forgot Password?</h3>
                            <p>
                                No problem, <a href="#">click here</a> to get a new password.
                            </p>	
                    </div><!--/span-->
                </div><!--/row-->


            </div><!--/.fluid-container-->

        </div><!--/fluid-row-->

        <!-- start: JavaScript-->

        <script src="{{URL::to('public/js/jquery-1.9.1.min.js')}}"></script>
        <script src="{{URL::to('public/js/jquery-migrate-1.0.0.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.ui.touch-punch.js')}}"></script>

        <script src="{{URL::to('public/js/modernizr.js')}}"></script>

        <script src="{{URL::to('public/js/bootstrap.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.cookie.js')}}"></script>

        <script src="{{URL::to('public/js/fullcalendar.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{URL::to('public/js/excanvas.js')}}"></script>
        <script src="{{URL::to('public/js/jquery.flot.js')}}"></script>
        <script src="{{URL::to('public/js/jquery.flot.pie.js')}}"></script>
        <script src="{{URL::to('public/js/jquery.flot.stack.js')}}"></script>
        <script src="{{URL::to('public/js/jquery.flot.resize.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.chosen.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.uniform.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.cleditor.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.noty.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.elfinder.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.raty.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.iphone.toggle.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.uploadify-3.1.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.gritter.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.imagesloaded.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.masonry.min.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.knob.modified.js')}}"></script>

        <script src="{{URL::to('public/js/jquery.sparkline.min.js')}}"></script>

        <script src="{{URL::to('public/js/counter.js')}}"></script>

        <script src="{{URL::to('public/js/retina.js')}}"></script>

        <script src="{{URL::to('public/js/custom.js')}}"></script>
        <!-- end: JavaScript-->

    </body>
</html>
