<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Painting, Art Gallery, Color Tought Of Maisha, Hand Painting" />
        <!-- css -->
        <link href="{{URL::to("public/front_end/css/bootstrap.min.css")}}" rel="stylesheet" />
        <link href="{{URL::to("public/front_end/plugins/flexslider/flexslider.css")}}" rel="stylesheet" media="screen" />
        <link href="{{URL::to("public/front_end/css/cubeportfolio.min.css")}}" rel="stylesheet" />
        <link href="{{URL::to("public/front_end/css/style.css")}}" rel="stylesheet" />

        <!-- Theme skin -->
        <link id="t-colors" href="{{URL::to("public/front_end/skins/default.css")}}" rel="stylesheet" />

        <!-- boxed bg -->
        <link id="bodybg" href="{{URL::to("public/front_end/bodybg/bg1.css")}}" rel="stylesheet" type="text/css" />



    </head>

    <body>

        <div id="wrapper">
            <!-- start header -->
            <header>
                
                @yield('header')
                
            </header>
            <!-- end header -->
            <section id="featured" class="bg">
                <!-- start slider -->

                <!-- start slider -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Slider -->
                            
                                @yield('slider')
                                
                            <!-- end slider -->
                        </div>
                    </div>
                </div>

            </section>
            
     

            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2>We use <span class="highlight">modern</span> infrastructure & technology</h2>
                                <p>Lorem ipsum dolor sit amet, ne duis posse mei, ut cum vero nominati. Sed graece aeterno consectetuer te. Cu duo tota deleniti, vis ea fuisset nostrum. Meliore inciderint qui ne. Suas cotidieque vel ut ei eros perpetua qui. Ponderum lobortis reformidans</p>
                            </div>
                        </div>
                    </div>
                </div>


           
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <h4>About Me</h4>
                                    <p><strong>Meliore inciderint qui ne. Suas cotidieque vel ut lobortis reformidans duo</strong></p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima
                                        voluptatem assumenda voluptas quidem sit maiores odio velit voluptate
                                    </p>
                                    <p>
                                        Mel explicari adipiscing consectetuer no, no mel apeirian scripserit repudiandae, ad assum mundi scribentur eam. Graecis offendit phaedrum eu his, eius ferri quidam eos ad, quis delenit vel ei. Alia modus facete te eos, eu tation appellantur per
                                    </p>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>

                <!-- divider -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blankline">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end divider -->

                <!-- parallax  -->
                <div id="parallax1" class="parallax text-light text-center marginbot50" data-stellar-background-ratio="0.5">
                    <div class="container">
                        <div class="row appear stats">
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="align-center color-white txt-shadow">
                                    <div class="icon">
                                        <i class="fa fa-clock-o fa-5x"></i>
                                    </div>
                                    <strong id="counter-coffee" class="number">1232</strong><br />
                                    <span class="text">Minutes</span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="align-center color-white txt-shadow">
                                    <div class="icon">
                                        <i class="fa fa-music fa-5x"></i>
                                    </div>
                                    <strong id="counter-music" class="number">345</strong><br />
                                    <span class="text">MP3 Songs</span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="align-center color-white txt-shadow">
                                    <div class="icon">
                                        <i class="fa fa-coffee fa-5x"></i>
                                    </div>
                                    <strong id="counter-clock" class="number">501</strong><br />
                                    <span class="text">Coffee Cups</span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="align-center color-white txt-shadow">
                                    <div class="icon">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <strong id="counter-heart" class="number">378</strong><br />
                                    <span class="text">Awwards</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <h4>Testimonials</h4>
                                    <div class="testimonialslide clearfix flexslider">
                                        <ul class="slides">
                                            <li>
                                                <blockquote>
                                                    Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
                                                </blockquote>
                                                <h4>Daniel Dan <span>&#8213; MA System</span></h4>
                                            </li>
                                            <li>
                                                <blockquote>
                                                    Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
                                                </blockquote>
                                                <h4>Mark Wellbeck <span>&#8213; AC Software </span></h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> One</a></li>
                                        <li><a href="#two" data-toggle="tab">Two</a></li>
                                        <li><a href="#three" data-toggle="tab">Three</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="one">
                                            <p><img src="img/dummy1.jpg" class="pull-left" alt="" />
                                                <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
                                            </p>
                                            <p>
                                                No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
                                            </p>
                                        </div>
                                        <div class="tab-pane" id="two">
                                            <p><img src="img/dummy1.jpg" class="pull-right" alt="" /> Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit
                                                et.
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu.</p>
                                        </div>
                                        <div class="tab-pane" id="three">
                                            <p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu. </p>
                                            <p>
                                                Cu cum commodo regione definiebas. Cum ea eros laboramus, audire deseruisse his at, munere aeterno ut quo. Et ius doming causae philosophia, vitae bonorum intellegat usu cu.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- divider -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="solidline">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end divider -->

                <!-- Portfolio Projects -->
                <div class="container marginbot50">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="heading">Recent Paints</h4>

                                    
                                    @yield('recentPhoto')

                        </div>
                    </div>
                </div>


                <!-- divider -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="solidline">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end divider -->

                <!-- clients -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-md-2 aligncenter client">
                            <img alt="logo" src="img/clients/logo1.png" class="img-responsive" />
                        </div>

                        <div class="col-xs-6 col-md-2 aligncenter client">
                            <img alt="logo" src="img/clients/logo2.png" class="img-responsive" />
                        </div>

                        <div class="col-xs-6 col-md-2 aligncenter client">
                            <img alt="logo" src="img/clients/logo3.png" class="img-responsive" />
                        </div>

                        <div class="col-xs-6 col-md-2 aligncenter client">
                            <img alt="logo" src="img/clients/logo4.png" class="img-responsive" />
                        </div>

                        <div class="col-xs-6 col-md-2 aligncenter client">
                            <img alt="logo" src="img/clients/logo5.png" class="img-responsive" />
                        </div>
                        <div class="col-xs-6 col-md-2 aligncenter client">
                            <img alt="logo" src="img/clients/logo6.png" class="img-responsive" />
                        </div>

                    </div>
                </div>

            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-lg-3">
                            <div class="widget">
                                <h4>Get in touch with us</h4>
                                <address>
                                    <strong>Sailor company Inc</strong><br>
                                    Sailor suite room V124, DB 91<br>
                                    Someplace 71745 Earth </address>
                                <p>
                                    <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                                    <i class="icon-envelope-alt"></i> email@domainname.com
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="widget">
                                <h4>Information</h4>
                                <ul class="link-list">
                                    <li><a href="#">Press release</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Career center</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="widget">
                                <h4>Pages</h4>
                                <ul class="link-list">
                                    <li><a href="#">Press release</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Career center</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="widget">
                                <h4>Newsletter</h4>
                                <p>Fill your email and sign up for monthly newsletter to keep updated</p>
                                <div class="form-group multiple-form-group input-group">
                                    <input type="email" name="email" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="copyright">
                                    <p>&copy; Color Thought Of Maisha - All Right Reserved</p>
                                    <div class="credits">
                                        <!--
All the links in the footer should remain intact. 
You can delete the links only if you purchased the pro version.
Licensing information: https://bootstrapmade.com/license/
Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                                        -->
                                        Developed by <a href="http://www.saraitsolution.com/" target="_blank">SaraItSolution.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="social-network">
                                    <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{URL::to("public/front_end/js/jquery.min.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/modernizr.custom.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/jquery.easing.1.3.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/bootstrap.min.js")}}"></script>
        <script src="{{URL::to("public/front_end/plugins/flexslider/jquery.flexslider-min.js")}}"></script>
        <script src="{{URL::to("public/front_end/plugins/flexslider/flexslider.config.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/jquery.appear.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/stellar.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/classie.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/uisearch.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/jquery.cubeportfolio.min.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/google-code-prettify/prettify.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/animate.js")}}"></script>
        <script src="{{URL::to("public/front_end/js/custom.js")}}"></script>


    </body>

</html>
