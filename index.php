<!doctype html>
<html class="no-js" lang="en">
<? session_start(); ?>	
<head>


<style>
            
.faq-section {
    background: #fdfdfd;
    min-height: 100vh;
    padding: 10vh 0 0;
}
.faq-title h2 {
  position: relative;
  margin-bottom: 45px;
  display: inline-block;
  font-weight: 600;
  line-height: 1;
}
.faq-title h2::before {
    content: "";
    position: absolute;
    left: 50%;
    width: 60px;
    height: 2px;
    background: #005b7c;
    bottom: -25px;
    margin-left: -30px;
}
.faq-title p {
  padding: 0 190px;
  margin-bottom: 10px;
}

.faq {
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.faq .card {
  border: none;
  background: none;
  border-bottom: 1px dashed #CEE1F8;
}

.faq .card .card-header {
  padding: 0px;
  border: none;
  background: none;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.faq .card .card-header:hover {
    background: #01bcc6;
    padding-left: 10px;
}
.faq .card .card-header .faq-title {
  width: 100%;
  text-align: left;
  padding: 0px;
  padding-left: 30px;
  padding-right: 30px;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  color: #3B566E;
  text-decoration: none !important;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

.faq .card .card-header .faq-title .badge {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 14px;
  float: left;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  text-align: center;
  background: #005b7c;
  color: #fff;
  font-size: 12px;
  margin-right: 20px;
}

.faq .card .card-body {
  padding: 30px;
  padding-left: 35px;
  padding-bottom: 16px;
  font-weight: 400;
  font-size: 16px;
  color: #6F8BA4;
  line-height: 28px;
  letter-spacing: 1px;
  border-top: 1px solid #F3F8FF;
}

.faq .card .card-body p {
  margin-bottom: 14px;
}

@media (max-width: 991px) {
  .faq {
    margin-bottom: 30px;
  }
  .faq .card .card-header .faq-title {
    line-height: 26px;
    margin-top: 10px;
  }
}
        </style>
    
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
        <body>

            <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
             <? if(!isset($_SESSION['username'])) { ?>
            <div class="topbar-area fix d-none d-md-block">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6 col-sm-6">
                           <div class="topbar-left">
                                
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
		                        <li><a class="pages" href="blog_sidebar.php">Blog</a></li>
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
                                    <a href="index.html"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="#ab">About us</a></li>
                                        <li><a href="find.php">Beach Cleanup</a></li>
                                        <li><a href="organize">Organize Beach Cleanup</a></li>
                                        <li><a class="pages" href="blog_siderbar.php">Blog</a>
                                            <ul class="sub-menu">
                                                
                                            </ul>
                                        </li>
                                        <li><a href="#">Donation</a></li>
                                        <li><a href="login.php">Login/Register</a></li>
                                    </ul>
                                </nav>
                     	</div>					
                     </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->
        <!-- Start Slider Area -->
        <div class="intro-area">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/1.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <!-- Start Slider content -->
                                            <div class="slide-content text-center">
                                                <h2 class="title2"> No one likes a dirty beach</h2>
                                                <div class="layer-1-3">
                                                    <!--<a href="#" class="ready-btn left-btn" ></a>-->
                                                </div>
                                            </div>
                                            <!-- End Slider content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/2.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                            <!-- Start Slider content -->
                                            <div class="slide-content text-center">
                                                <h2 class="title2"> Think outside the box... and then fill the box with litter.</h2>
                                                <div class="layer-1-3">
                                                    <!--<a href="#" class="ready-btn left-btn" ></a>-->
                                                </div>
                                            </div>
                                            <!-- End Slider content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <!-- End Slider Area -->
        
        <!-- about-area start -->
        <div class="about-area page-padding" id="ab">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-image">
                            <img src="img/about/beach.jpg" alt="">
                            <!--<div class="video-content">
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>-->
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h3><center>ABOUT US</center></h3>
                            
                            <p><b>BEACH</b> a place of relaxation, rest and transquility. So our place of relaxation cannot be dirty right!!.</p>
                            <p>We at Blue Care take care of the beaches by organizing beach clean.</p>
                            <p>What you can do is:</p>
                            <div class="about-details">
                                <ul class="marker-list">
                                    <li>Join the cleanup that is already arranged.</li>
                                    <li>Organize our own beach cleanup.</li>
                                    <li>Donate for the cleanup</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- about-area end -->
		<div class="container">
                <!-- end Row -->
                <div class="row">
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="fas fa-hand-paper"></i>
                                </div>
                                <div class="mission-text">
                                    <h4>Gloves</h4>
                                    <p>Gloves are important when to go for a beach cleanup</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="fas fa-wine-bottle"></i>
                                </div>
                                <div class="mission-text">
                                    <h4>Water Bottles</h4>
                                    <p>Everyone needs water to drink. So carry your water bottle</p>
                                </div>
                            </div>
                      </div>
                      <!---  Start column -->
                        <div class=" col-md-4 col-sm-4 col-xs-12">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="fas fa-trash"></i>
                                </div>
                                <div class="mission-text">
                                    <h4>Trash bag</h4>
                                    <p>Trash bags are necessary for collecting the waste</p>
                                </div>
                            </div>
                        </div>
                         <!--End column -->
                         <!--<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="mission-about">
                        <div class="mission-icon">
                            <i class="flaticon-031-release"></i>
                        </div>
                        <div class="mission-text">
                            <h4>Food</h4>
                            <p></p>
                        </div>
                    </div>
                </div>-->
                    </div>
                </div>


                                        <!-- ***** FAQ Start ***** -->
                                        <div class="col-md-6 offset-md-3" id="faqq">
            
            <div class="faq-title text-center pb-3">
                <h2>FAQ</h2>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="faq" id="accordion">
                <div class="card">
                    <div class="card-header" id="faqHeading-1">
                        <div class="mb-0">
                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                <span class="badge">1</span>What should I bring? What equiment will I need?
                            </h5>
                        </div>
                    </div>
                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                        <div class="card-body">
                            <p>Equipment such as gloves, bags and litter pickers will usually be supplied by the organiser, but you are welcome to bring your own! We recommend bringing sturdy gloves such as gardening gloves for comfort and protection against potential sharp litter.

                                Reducing the amount of plastic bags used is ideal, so you can bring a bucket or reusable bag to put collected litter in.
                                
                                Depending on the timing of the clean, you may need to bring a packed lunch (containing minimal plastic waste!) Bring plenty of water too.
                                
                                Wear weather-appropriate clothing such as waterproofs if it’s predicted to rain, or a sun hat if it is sunny!</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-2">
                        <div class="mb-0">
                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                <span class="badge">2</span>What happens when I get there?
                            </h5>
                        </div>
                    </div>
                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                        <div class="card-body">
                            <p>Usually the organiser will give a briefing on the beach litter problem, instructions and safety guidelines for the clean itself and whether any information on the litter will be collected.

                                Equipment should be handed out afterwards.
                                
                                A group picture may be taken before or after the clean, you can choose whether or not to be included in this.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-3">
                        <div class="mb-0">
                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                <span class="badge">3</span>What are the main health and safety points should I take care?
                            </h5>
                        </div>
                    </div>
                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                        <div class="card-body">
                            <p>Depending on where the clean is happening, health and safety advice will vary. For example, if the site is near a pier, it is best to clean next to it and not underneath. Avoid slippery surfaces like large rocks.

                                Be dressed suitably for the type of beach and weather conditions you will be working in- we recommend closed-toe shoes.
                                
                                You may find litter that is sharp, such as glass or nails- in this situation call your organiser over and they will handle it. Wear sturdy protective gloves to ensure anything like this doesn’t hurt you if picked up.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-4">
                        <div class="mb-0">
                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                <span class="badge">4</span> Can I bring children around? What about the pets?
                            </h5>
                        </div>
                    </div>
                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                        <div class="card-body">
                            <p>You are usually welcome to bring children and dogs along to beach cleans.

                                Make sure children are dressed appropriately and bring gloves of a suitable size for them. Under 16’s must be supervised by an adult.
                                
                                Be aware that some beaches may not allow dogs in certain areas or at certain times of the year.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-5">
                        <div class="mb-0">
                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                <span class="badge">5</span> How long will a beach clean last?
                            </h5>
                        </div>
                    </div>
                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                        <div class="card-body">
                            <p> Beach cleans usually last for around two hours, but it’s okay if you cannot stay for the full length of the clean.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-6">
                        <div class="mb-0">
                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                <span class="badge">6</span> How much exercise is involved?
                            </h5>
                        </div>
                    </div>
                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                        <div class="card-body">
                            <p>Minimal exercise will be involved- you should be able to walk up and down the beach, but this can be at your own pace.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqHeading-7">
                        <div class="mb-0">
                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                <span class="badge">7</span> What else can I do to help?
                            </h5>
                        </div>
                    </div>
                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                        <div class="card-body">
                            <p>Do not flush baby wipes, cotton buds or sanitary products down the loo.

                                Cut down on plastic waste by using reusable bags, coffee cups, water bottles and Tupperware tubs
                                
                                Make sure you recycle as much as you can!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    </section>
    <br><br>

<!--FAQS END-->


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
        <!-- fontawesome js -->
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
          <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
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

<!-- Mirrored from rockstheme.com/rocks/aievari-live/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:27:46 GMT -->
</html>
