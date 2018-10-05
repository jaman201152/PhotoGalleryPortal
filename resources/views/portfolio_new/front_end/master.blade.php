<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
    <title>Zaman IT Solution</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('public/portfolio_new/assets/css/bootstrap.css') }} " rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::to('public/portfolio_new/assets/css/main.css')}} " rel="stylesheet">
	<link rel="stylesheet" href="{{URL::to('public/portfolio_new/assets/css/font-awesome.min.css') }} ">

    <script src="{{URL::to('public/portfolio_new/assets/js/jquery.min.js') }} "></script>
	<script src="{{URL::to('public/portfolio_new/assets/js/modernizr.custom.js') }} "></script>
	
	<script src="{{URL::to('public/portfolio_new/assets/js/typed.js') }} "></script>
	<script src="{{URL::to('public/portfolio_new/assets/js/typed.min.js') }} "></script>
	<script src="{{URL::to('public/portfolio_new/assets/js/demos.js') }} "></script>
	
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
        
			@yield('menu')

	<!-- End Menu -->


<!-- ========== HEADER SECTION ========== -->

   @yield('content')

	
	
	<!-- ========== ABOUT SECTION ========== -->
	  @yield('about')

	<!-- ========== CAROUSEL SECTION ========== -->	
	<section id="portfolio" name="portfolio"></section>
	<div id="f">
		<div class="container">
			<div class="row centered">
				<h3>SOME PROJECTS</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<div class="col-lg-6 col-lg-offset-3">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active centered">
								<img class="img-responsive" src="{{URL::to('public/portfolio_new/assets/img/c1.png')}} " alt="">
							</div>
							<div class="item centered">
								<img class="img-responsive" src="{{URL::to('public/portfolio_new/assets/img/c2.png')}} " alt="">
							</div>
							<div class="item centered">
								<img class="img-responsive" src="{{URL::to('public/portfolio_new/assets/img/c3.png')}} " alt="">
							</div>
						</div>
						<br>
						<br>
						<ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
					</div>
				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</div>	<!-- f -->

	<!-- ========== CONTACT SECTION ========== -->
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">All rights reserved @ 2017</div>
			</div>
		</div>
	</section>
		
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ URL::to('public/portfolio_new/assets/js/classie.js') }} "></script>
    <script src="{{ URL::to('public/portfolio_new/assets/js/bootstrap.min.js' )}} "></script>
    <script src="{{ URL::to('public/portfolio_new/assets/js/smoothscroll.js') }}"></script>
	<script src="{{ URL::to('public/portfolio_new/assets/js/main.js')}}"></script>
</body>
</html>
