
<?php 
	require_once '../../Nilelib/Model/aClass.php';
	require_once '../../Nilelib/Controller/auth_controller.php';
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if( isset($_POST["book_nm"]) && isset($_POST["Category"]) && isset($_POST["author_nm"]) 
		&& isset($_POST["img"]) && isset($_POST["desc"]) )
		{
			$flag=false;
			$bk = new Books();
			$auth = new auth_controller();
			$bk->setName( trim($_POST["book_nm"]) );
			$bk->setCategory(trim($_POST["Category"]));
			$bk->setImage(trim($_POST["img"]));
			$bk->setAuthor_nm(trim($_POST["author_nm"]));
			$bk->setDescription(trim($_POST["desc"]));

			if($auth->find_book(trim($_POST["book_nm"]),trim($_POST["Category"]),trim($_POST["author_nm"])))
			{echo "This Book is Already In The Database";}
			else {$auth->add_book($bk);}
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
				                <a class="navbar-brand" href="Home.html">Nile<span>Library</span>.</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                    <li><a href="Main.php">Home</a></li>
									<li><a href="Books.php">Books</a></li>
									<li><a href="AboutUs.php">About</a></li>
                                    <!-- <li><a href="Contact.php">Contact</a></li> -->
                                    <li class="scroll active"><a href="#LogIn">Add Book</a></li>
                                    
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
				<div class="container " style="margin-left: 10%;">
				<div class="heading_container">
					<h1 class="" style="color: #e99c2e; font-size: 50px; margin-left: -2%;">
						<b><span style="color: #454240;">Add</span> Book</b>
					</h1>
				</div>
			
				</div>

				<div class="container" style="margin-top: 2%;">
				<div class="row">
					<div class="col-md-6" >
					<!-- -----------------THE ADD BOOK FORM---------------- -->
					<form action="add_book.php" method="POST">
						<div style="width: 60%;">
							<input type="text" placeholder="Book Name" class="form-control" name="book_nm" required/>
						</div>

						<div style="margin-top: 4%; width: 60%;">
						<!-- <label for="cars">Choose a car:</label> -->

							<!-- <select name="categry" class="form-control" placeholder="Category">
							<option value="programming">programming</option>
							<option value="history">history</option>
							<option value="psychology">psychology</option>
							</select> -->
							<input type="text" placeholder="Category" class="form-control" name="Category" required/>
						</div>
						
						<div style="margin-top: 4%; width: 60%;">
							<input type="text" placeholder="Author Name" class="form-control" name="author_nm" required/>
						</div>

						<div style="margin-top: 4%; width: 60%;">
							<input type="text" placeholder="Image" class="form-control" name="img" required/>
						</div>

						<div style="margin-top: 4%; width: 60%; ">
							<textarea type="text" placeholder="Discription" class="form-control" style="height: 90px;" name="desc" required></textarea>
						</div>

						<div class="d-flex " style="margin-top: 0%; width: 60%; ">
							<button class="btn-cart welcome-add-cart welcome-more-info" style="margin-left: 23%; margin-top: 2%; margin-bottom: 3%; background-color: #02010075; border-radius: 5px;" >
								ADD
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