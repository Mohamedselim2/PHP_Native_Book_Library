<?php
	require_once'../../Nilelib/Controller/auth_controller.php';
	require_once'../../Nilelib/Model/aClass.php';

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if( isset($_POST["Name"]) && isset($_POST["Email"]) && isset($_POST["Phone"]) && isset($_POST["Message"]))
		{
			$fb = new FeedBack();
			$auth = new auth_controller();
			$fb->setName(trim($_POST["Name"]) );
			$fb->setEmail(trim($_POST["Email"]));
			$fb->setPhone_no(trim($_POST["Phone"]));
			$fb->setMassage(trim($_POST["Message"]));

			$auth->add_message($fb);
			echo "Message Has Been Sent Successfully";
		}
	}
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>NileLiberary</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
				        <div class="container">            
				            

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="Main.php">Nile<span>Library</span>.</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                    <li><a href="Main.php">Home</a></li>
									<li><a href="Books.php">Books</a></li>
									<li><a href="AboutUs.php">About</a></li>
				                    <li class="scroll active"><a href="Contact.php">Contact</a></li>
									<!-- <li><a href="LogIn.html">Login</a></li> -->
                                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->

        <!-- CONTACT STRAT -->
		<div style="
		background-image: url(../furn-master/assets/images/slider/about_us_img17.jpg);
		background-size: cover;		background-position: center;">
			<section style="margin-top: 7%; margin-left: 35%;">
				<div class="container " style="margin-left: 5%;">
				<div class="heading_container">
					<h1 class="" style="color: #e99c2e; font-size: 50px;">
					<b><span style="color: #454240;">Contact</span> Us</b>
					</h1>
				</div>
			
				</div>

				<div class="container" style="margin-top: 2%;">
				<div class="row">
					<div class="col-md-6" >
					<form action="Contact.php" method="POST">
						<div style="width: 60%;">
						<input type="text" placeholder="Name" class="form-control" required name="Name"/>
						</div>
						<div style="margin-top: 4%; width: 60%;">
						<input type="email" placeholder="Email" class="form-control" required name="Email"/>
						</div>
						<div style="margin-top: 4%; width: 60%;">
						<input type="text" placeholder="Phone" class="form-control" required name="Phone"/>
						</div>
						<div style="margin-top: 4%; width: 60%; ">
						<textarea type="text" placeholder="Message" class="form-control" style="height: 90px;" required name="Message" ></textarea>
						</div>
						<div class="d-flex " style="margin-top: 0%; width: 60%; ">
						
						<button class="btn-cart welcome-add-cart welcome-more-info" style="margin-left: 23%; margin-top: 2%; margin-bottom: 3%;" >
							SEND
						</button>
						</div>

					</form>

					</div>

				</div>
				</div>
			</section>
		</div>
        <!-- CONTACT END -->
        
		
		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>
					<p>
						&copy;copyright. designed and developed by <i>The Boys</i>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>