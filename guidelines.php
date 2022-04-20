<!doctype html>
<html class="no-js" lang="en">
<? session_start(); ?>
<!-- Mirrored from rockstheme.com/rocks/aievari-live/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:27:46 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Blue Care</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v4.5.2 css -->
		<link rel="stylesheet" href="css/bootstrap4.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
       <!-- Animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <style>
        .orgtop{
           background-color:#008eab;
           padding-bottom: 5%;
           padding-top:3%;
        }
		.py-8{
         	background-color: #01bcc6;  
            color: white;
            padding-top: 3%;
            padding-bottom:3%;
        }
	</style>
	<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <? if(!isset($_SESSION['username'])) {  ?>
            <div class="topbar-area fix d-none d-md-block">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6 col-sm-6">
                           <div class="topbar-left">
                                <ul>
                                   
                                </ul>
							</div>
                        </div>
                        <div class=" col-md-6 col-sm-6">
                            <div class="topbar-right">
                                <div class="top-social">
                                    <div class="header-right-link">
                                        <!-- search option end -->
                                        <a class="s-menu" href="login.php">Login/Register</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? } ?>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area d-none d-md-block">
                <div class="container">
                <!-- mainmenu start -->
		            <nav class="navbar navbar-default justify-content-end navbar-expand">
		            	<div class="main-menu">
		                	<ul class="nav navbar-nav navbar-right">
		                    	<li><a class="pages" href="index.php">Home</a></li>
		                        <li><a href="#ab">About us</a></li>
		                        <li><a href="find.php">Beach Cleanup</a></li>
		                        <li><a href="organize.php">Organize Beach Cleanup</a></li>
		                        <li><a class="pages" href="#">Blog</a></li>
								<?if(isset($_SESSION['username'])) { ?>
									<li><a href="profile.php"><?echo $_SESSION['username'];?></a>
                                                    <ul class="sub-menu">
                                                            <li><a href="profile.php">Profile</a></li>
                                                            <li><a href="logout.php">Logout</a></li>   
                                                    </ul>
                                                </li>
								<?  }
								?>
		                    </ul>
		                </div>
		            </nav>
                <!-- mainmenu end -->
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area d-md-none">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="#ab">About us</a></li>
                                        <li><a href="find.php">Beach Cleanup</a></li>
                                        <li><a href="organize.php">Organize Beach Cleanup</a></li>
                                        <li><a class="pages" href="#">Blog</a>
                                        </li>
                                        <li><a href="#">Donation</a></li>
                                        <li><a href="login.html">Login/Register</a></li>
                                    </ul>
                                </nav>
                     	</div>					
                     </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Organize Beach CleanUp</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- organize beach clean area start -->
             <div class="orgtop">
              <div class="row">
                <div class="col text-center">
                  <h1 class="mb-2 text-uppercase" style="color:white; font-size: 160%;"><strong> How To Organise a beach clean</strong></h1>
                  <img src="https://p.kindpng.com/picc/s/114-1145094_water-wave-drip-sea-beach-wave-structure-river.png" width="95" height="20" alt="Waves">     
                  <div class="row mt-5 page-intro">
                    <div class="col-md-8 offset-md-2">
                      <p style="color:white;">If you can’t find a beach clean near you to take part in, then organise one! Follow the easy instructions below, fill out the required form and once your details have been verified by an administrator your beach clean event will be ready to welcome volunteers.</p>
                    </div>
                  </div>
                      </div>
              </div>
            </div>      
  <section class="py-8">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
                        <!--<div class="gd"></div>-->
						<h2 style="color:white; font-size: 180%; ">1. Choose a beach to clean</h2>
							<p style="color:white;">The first thing to do is decide where you are going to have your beach clean. Here are some things to consider:</p>
							<ul>
							<li style="color:white;">Is there easy access (a designated path or walkway) to the beach?</li>
							<li style="color:white;">Does the beach get regularly cleaned by the council already?</li>
							<li style="color:white;">Don&#8217;t forget to check the tide tables for the beach before setting a time</li>
							</ul><br><br>
							<h2 style="color:white; color:white; font-size: 180%; ">2. Notify the local authorities / beach owner</h2>
							<p style="color:white;">For organised events it is always good to notify the local authorities, the beach manager or the beach owner if it is private land. They will not only give you permission and advice, but will probably be able to help provide equipment and collection at the end of the event. If they can&#8217;t collect the litter after the event make sure you have a plan to take it away.</p>
							<br>
							<h2 style="color:white; color:white; font-size: 180%; ">3. Complete a risk assessment</h2>
							<p style="color:white;">Although volunteers who participate in your beach clean will be doing so at their own risk, it&#8217;s always a good idea to complete a risk assessment. A risk assessment is just a simple examination of the location and activities so that any potential hazards are identified and precautionary measures can be taken.</p>
							<br>
							<h2 style="color:white; color:white; font-size: 180%; ">4. Register the event</h2>
							<p style="color:white;">This can be done quickly and easily using our online registration form. Once registered it will be checked by our staff for approval. Once approved it will be live on this site and people will be able to search for it. If you link the event to your social media it will help to spread the word and get more volunteers.</p>
							<br>
							<h2 style="color:white; color:white; font-size: 180%; ">5. Confirmation of volunteers</h2>
							<p style="color:white;">When volunteers register to join your beach clean you will receive an email from them. You need to send them a confirmatory email to let them know you have received it.  This is also a great time to send them any additional information about the event which might not have been included on the event registration form (eg local cafes, specific details about access or parking and so on).</p>
							<br>
							<h2 style="color:white; color:white; font-size: 180%; ">6. Update volunteers</h2>
							<p style="color:white;">As the date approaches it might be a good idea to send out a confirmatory email to volunteers. Check the weather, provide last minute details, particularly if anything has changed.</p>
					</div>
				</div>
			</div>
		</section>

     <!-- Start Footer Area -->
     <footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    
                                   <h4>DO JOIN US FOR BEACH CLEAN!!!</h4>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <!--<input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services</h4>
                                    <ul class="footer-list">
                                        <li><a href="#ab">About us</a></li>
                                        <li><a href="#faqq">FAQS </a></li>
                                        <li><a href="find.php">Events</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul>
                                    <!--
                                    <ul class="footer-list hidden-sm">
                                        <li><a href="#">Customer Care</a></li>
                                        <li><a href="#">Live chat</a></li>
                                        <li><a href="#">Notification</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Contact us </a></li>
                                    </ul>-->
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4> 
                                    <div class="footer-contacts" id="contact">
                                        <p><span>Tel :</span> +0890-564-5644</p>
                                        <p><span>Email :</span> bluecare@gmail.com</p>
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </footer>
        <!-- End Footer area -->
         
         <!-- all js here -->
         <!-- jquery latest version -->
         <script src="js/vendor/jquery-1.12.4.min.js"></script>
         <!-- bootstrap js -->
         <script src="js/bootstrap4.min.js"></script>
         <!-- owl.carousel js -->
         <script src="js/owl.carousel.min.js"></script>
           <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Chart JS -->
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/Chart.js"></script>
         <!-- magnific js -->
        <script src="js/magnific.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
         <!-- Form validator js -->
         <script src="js/form-validator.min.js"></script>
         <!-- plugins js -->
         <script src="js/plugins.js"></script>
         <!-- main js -->
         <script src="js/main.js"></script>
     </body>
</html>
