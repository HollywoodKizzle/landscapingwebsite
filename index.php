
<?php
$phoneinfo= "984-235-8614";
$workinghours="Mon-Sat 9am-5pm";

?>

<!DOCTYPE html>
<html class="no-js">

    <head>
        <!-- Basic Page Needs
  ================================================== -->
        <meta http-equiv="Content-Type" content="text.php; charset=utf-8">
        <title>GreensKeeper - Gardening and Landscaping Responsive.php5 Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
  ================================================== -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <!-- CSS
  ================================================== -->
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="bootstrapdemo.css"> -->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

  
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
        <link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="/Template/css/css-onlyCarousel2.css" rel="stylesheet">
        <link href="/Template/css/responsive3.css" rel="stylesheet">
        <link href="/Template/css/actionbar2.css" rel="stylesheet">
        <link href="/Template/css/offcanvasmenu2.css" rel="stylesheet">
        <link href="/Template/css/topnavbar.css" rel="stylesheet">

        
       


        <!-- CUSTOM STYLESHEET FOR STYLING -->
        <!-- Color Style -->
        <link href="colors/color1.css" rel="stylesheet" type="text/css">
        <!-- SCRIPTS
  ================================================== -->
        <script src="js/modernizr.js"></script>
        <!-- Modernizr -->
		<script src="https://kit.fontawesome.com/cd61d9ef13.js" crossorigin="anonymous"></script>
		<!--Removal of unwanted de3fault Template elements and content-->
		    
    </head>
    <body class="home">
        <!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
        <div class="body" id="hbody">
            <!-- Start Header -->
            <div class="header-wrapper">
                <header class="site-header">
                    <div class="container" id="site-logo-parent">
                        <div class="site-logo">
                            
                          <?php include 'headerlink.php';?>
                           
                        </div>
                        <div class="site-tagline">Lawn &amp;Landscaping Services</div>
                        <!-- <a href="#" class="btn btn-default btn-sm" id="contact-info"><i class="fa fa-bars"></i></a>-->
                        <div class="site-header-right">
                            <ul class="header-info-cols">
                                <li>
                                    <span class="icon-col">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <div>
                                        <div>
                                            <span>
                                                Suite 300 Houston<br>Texas - 77042 USA
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                   <a href="tel:+1<?php echo $phoneinfo;?>">    
                                    <span class="icon-col">
                                        <i class="fa fa-phone"></i>
                                   
                                    </span>
                                    </a>
                                    <div>
                                        <div>
                                        <a href="tel:+1<?php echo $phoneinfo;?>">
                                            <span>
                                                <strong>Call us toll free</strong>
                                                <br><?php  echo $phoneinfo;?>
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <span class="icon-col">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                    <div>
                                        <div>
                                            <span>
                                                <strong>Working Hours</strong>
                                                <br><?php echo $workinghours;?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
                
                <div class="main-navigation" id="menu-container">
                    <div class="container">
                       <!-- <a href="book-service.php" id="book-service-btn" class="btn btn-primary btn-sm pull-right quote-head-btn">Book a service</a>-->
                        <ul class="pull-right social-icons">
                            <li class="facebook">
                                <a href="#">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                      <!--  <a href="#" id="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </a>-->
                       <!-- <div id="phone-info">
					<span class="icon-col" style="border-radius: 100%"><i class="fa fa-phone"></i></span>
					 <span>919-628-6766</span>
				 </div>
				
				<div id="hours-info">
					<span class="icon-col"><i class="fa fa-clock-o"></i></span>
					<span>Mon - Sat 6am-5pm</span>
				</div>
				
                        <a href="#" id="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </a>-->
                        <nav role="menu">
                            <ul class="dd-menu sf-menu">
                                <li>
                                    <a href="index.php">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index2.php">Home version 2</a>
                                        </li>
                                        <li>
                                            <a href="index.php">Header Styles</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.php">Style 1(Default)</a>
                                                </li>
                                                <li>
                                                    <a href="header-style2.php">Style 2</a>
                                                </li>
                                                <li>
                                                    <a href="header-style3.php">Style 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.php">About</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="book-service.php">Book a Service</a>
                                        </li>
                                        <li>
                                            <a href="pricing.php">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="faqs.php">FAQs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="services.php">Services</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="service-single.php">Fall and Spring Cleanup</a>
                                        </li>
                                        <li>
                                            <a href="service-single.php">Lawn Care</a>
                                        </li>
                                        <li>
                                            <a href="service-single.php">Landscape Design</a>
                                        </li>
                                        <li>
                                            <a href="service-single.php">Plants, Flowers, Soils</a>
                                        </li>
                                        <li>
                                            <a href="service-single.php">Tree, Shrub, Turf</a>
                                        </li>
                                        <li>
                                            <a href="service-single.php">Gutter Cleaning</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="projects-grid.php">Projects</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="projects-grid.php">Projects Grid</a>
                                        </li>
                                        <li>
                                            <a href="projects-list.php">Projects List</a>
                                        </li>
                                        <li>
                                            <a href="projects-gallery.php">Projects Gallery</a>
                                        </li>
                                        <li>
                                            <a href="single-project.php">Single Project</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="megamenu">
                                    <a href="javascrip:void(0)">Mega Menu</a>
                                    <ul class="dropdown">
                                        <li>
                                            <div class="megamenu-container container">
                                                <div class="row">
                                                    <div class="col-md-3 megamenu-col">
                                                        <span class="megamenu-sub-title">Features</span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="shortcodes.php">Shortcodes</a>
                                                            </li>
                                                            <li>
                                                                <a href="typography.php">Typography</a>
                                                            </li>
                                                            <li>
                                                                <a href="services.php">Services</a>
                                                            </li>
                                                            <li>
                                                                <a href="projects-grid.php">Projects</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 megamenu-col">
                                                        <span class="megamenu-sub-title">Latest news</span>
                                                        <div class="widget recent_posts">
                                                            <ul>
                                                                <li>
                                                                    <a href="single-post.php" class="media-box">
                                                                        <img src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                                    </a>
                                                                    <h5>
                                                                        <a href="single-post.php">How to make your lawn &amp;Landscape look at its's best</a>
                                                                    </h5>
                                                                    <span class="meta-data grid-item-meta">Posted on 05 April, 2016</span>
                                                                </li>
                                                                <li>
                                                                    <a href="single-post.php" class="media-box">
                                                                        <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                                    </a>
                                                                    <h5>
                                                                        <a href="single-post.php">Time to stay with your family using our services</a>
                                                                    </h5>
                                                                    <span class="meta-data grid-item-meta">Posted on 04 April, 2016</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 megamenu-col">
                                                        <span class="megamenu-sub-title">Our Services</span>
                                                        <img src="http://placehold.it/900x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-list.php">Blog</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-list.php">Blog List</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid.php">Blog Grid</a>
                                        </li>
                                        <li>
                                            <a href="single-post.php">Single Blog Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Start Hero Area -->
          <!-- <div class="hero-area">
                <div class="flexslider heroflex hero-slider" id="Homepage-Topslider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
                    <ul class="slides">
                        <li class="parallax" style="background-image: url(http://placehold.it/1440x600&amp;text=IMAGE+PLACEHOLDER);">
                            <div class="flex-caption text-align-center">
                                <div class="container">
                                    <div class="flex-caption-table">
                                        <div class="flex-caption-cell">
                                            <div class="flex-caption-text">
                                                <h2>
                                                    Making your surroundings<br>beautiful for 40 years
                                                </h2>
                                                <a href="book-service.php" class="basic-link">Let's get started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="parallax" style="background-image: url(http://placehold.it/1440x600&amp;text=IMAGE+PLACEHOLDER), url(localhost/Pictures/asian.jpg);">
                            <div class="flex-caption text-align-center">
                                <div class="container">
                                    <div class="flex-caption-table">
                                        <div class="flex-caption-cell">
                                            <div class="flex-caption-text">
                                                <h2>
                                                    Professional Gardening, Landscaping<br>&amp;Maintenance Services
                                                </h2>
                                                <a href="services.php" class="basic-link">See all services</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>-->
                        <!-- <div id="owl-demo">
                           <div class="item re" id="slide1"></div>
                          <div class="item" id="slide2"></div>
                          <div class="item" id="slide3"></div>
                        </div>-->
                        
       <!-- <a href="#" id="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </a>-->

           <?php include 'offcanvasmenu.php';?>
        <?php include 'topnavbar.php';?>
        <?php include 'css-onlyCarousel.php'?>

                        
           
           <?php include 'actionbar2.php';?>
           <!-- <div class="quote-teaser" id="quote-teaser1">
                <div class="container" id="estimate-form-body">
                    <div class="quote-teaser-title">
					
                        <h3>
                            <i class="fa fa-info-circle accent-color"></i>
                            Request an estimate
                        </h3>
                    </div>
                    <form method="post" id="quoteform" name="quoteform" class="quick-quote clearfix" action="mail/quote.php">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <input name="quote-name" id="quote-name" type="text" placeholder="Your Name" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <input name="quote-email" id="quote-email" type="email" placeholder="Your Email" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <select name="quote-service" id="quote-service" class="form-control selectpicker">
                                    <option>Select Service</option>
                                    <option>Fall and Spring Cleanup</option>
                                    <option>Lawn Care</option>
                                    <option>Landscape Design</option>
                                    <option>Plants, Flowers, Soils</option>
                                    <option>Tree, Shrub, Turf</option>
                                    <option>Gutter Cleaning</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <input id="quote-submit" name="quote-submit" type="submit" value="Submit" class="btn btn-primary btn-block">
                            </div>
                        </div>
                        <div id="Quote-message" class="accent-color"></div>
                    </form>
               </div>
            </div>
           </div>
            <!-- Main Content -->
            <div id="main-container">
                <div class="content unwanted">
                    <div class="shadow-row">
                        <div class="container">
                            <div class="row unwanted">
                                <div class="col-md-6 col-sm-6 unwanted">
                                    <h1 class="short"><?php include 'headerlink.php';?></h1>
                                    <p>
                                        <strong>Gardening, Landscaping and Maintenance Services</strong>
                                    </p>
                                    <p>
                                        <img src="http://placehold.it/900x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                    </p>
                                    <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim.</p>
                                    <a href="#" class="btn btn-default">Read more about us</a>
                                </div>
                                <div class="spacer-40 visible-xs unwanted"></div>
                                <div class="col-md-6 col-sm-6 unwanted">
                                    <div class="connected-blocks">
                                        <span class="icon">
                                            <i class="fa fa-male"></i>
                                        </span>
                                        <h5>Work Culture</h5>
                                        <h3>Aenean imperdiet lacus</h3>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim imperdiet lacus sit amet elit porta, et malesuada erat bibendum.</p>
                                    </div>
                                    <div class="connected-blocks">
                                        <span class="icon">
                                            <i class="fa fa-flag"></i>
                                        </span>
                                        <h5>Our History</h5>
                                        <h3>
                                            Quisque tempor dolor <a href="#">sit amet</a>
                                            tellus malesuada
                                        </h3>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada, malesuada iaculis eros dignissim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-60 unwanted"></div>
                    </div>
                    <div class="lgray-bg" style="background-image:url(images/leaves1.png); background-repeat:repeat">
                        <div class="container unwanted">
                            <h4 class="stacked-title">Why you should choose us</h4>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-block">
                                        <span class="icon">
                                            <i class="fa fa-trophy"></i>
                                        </span>
                                        <h5>Independent venture</h5>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-block">
                                        <span class="icon">
                                            <i class="fa fa-arrow-up"></i>
                                        </span>
                                        <h5>High Quality</h5>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-block">
                                        <span class="icon">
                                            <i class="fa fa-users"></i>
                                        </span>
                                        <h5>Local Impact</h5>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-block">
                                        <span class="icon">
                                            <i class="fa fa-dollar"></i>
                                        </span>
                                        <h5>Simple Pricing</h5>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-50 unwanted"></div>
                        </div>
                    </div>
                    <div class="spacer-60 unwanted"></div>
                    <div class="container">
                        <div class="text-align-center unwanted">
                            <h2>Services we offer</h2>
                            <hr class="sm">
                        </div>
                        <div class="carousel-wrapper ">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="services-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                    <li class="item">
                                        <div class="service-grid-item grid-item format-standard">
                                            <a href="service-single.php" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-inner">
                                                <h4>
                                                    <a href="service-single.php">Fall and Spring Cleanup</a>
                                                </h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                                <a href="service-single.php" class="more">View service details</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="service-grid-item grid-item format-standard">
                                            <a href="service-single.php" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-inner">
                                                <h4>
                                                    <a href="service-single.php">Lawn Care &amp;Services</a>
                                                </h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                                <a href="service-single.php" class="more">View service details</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="service-grid-item grid-item format-standard">
                                            <a href="service-single.php" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-inner">
                                                <h4>
                                                    <a href="service-single.php">Landscape Design &amp;Installation</a>
                                                </h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                                <a href="service-single.php" class="more">View service details</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="service-grid-item grid-item format-standard">
                                            <a href="service-single.php" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-inner">
                                                <h4>
                                                    <a href="service-single.php">Plants, Flowers, Soils and Mulches</a>
                                                </h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                                <a href="service-single.php" class="more">View service details</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="service-grid-item grid-item format-standard">
                                            <a href="service-single.php" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-inner">
                                                <h4>
                                                    <a href="service-single.php">Tree, Shrub &amp;Turf</a>
                                                </h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                                <a href="service-single.php" class="more">View service details</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="service-grid-item grid-item format-standard">
                                            <a href="service-single.php" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-inner">
                                                <h4>
                                                    <a href="service-single.php">Gutter Cleaning</a>
                                                </h4>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                                <a href="service-single.php" class="more">View service details</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="spacer-60"></div>
                    <!-- Client Testimonials -->
                    <div class="parallax parallax1 parallax-light padding-tb75 unwanted" style="background-image:url(http://placehold.it/1400x700&amp;text=IMAGE+PLACEHOLDER);">
                        <div class="text-align-center">
                            <h2>
                                We are your one stop location for all of<br>
                                your outdoor needs,for both residential<br>and commercial properties.
                            </h2>
                            <a href="#" class="btn btn-default btn-ghost btn-light">Explore our services</a>
                        </div>
                    </div>
                    <div class="padding-tb75 lgray-bg unwanted" style="background-image:url(images/leaves3.png); background-repeat:repeat">
                        <div class="container">
                            <a href="#" class="btn btn-primary pull-right">Visit blog</a>
                            <h2>Latest News</h2>
                            <hr class="sm">
                            <div class="carousel-wrapper">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw unwanted" id="blog-slider" data-columns="2" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                        <li class="item">
                                            <div class="blog-list-item format-standard">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-5 unwanted">
                                                        <a href="#" class="media-box">
                                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                            <span class="date">
                                                                <span class="day">05</span>
                                                                <span class="month">Apr</span>
                                                            </span>
                                                        </a>
                                                        <div class="blog-item-info">
                                                            <a href="#" class="meta-data">
                                                                <i class="fa fa-comments"></i>
                                                                10 Comments
                                                            </a>
                                                            <div class="meta-data">
                                                                <i class="fa fa-tags"></i>
                                                                <a href="#">Benefits</a>
                                                                , <a href="#">How to</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7 unwanted">
                                                        <h4>
                                                            <a href="#">Time to stay with your family using our services</a>
                                                        </h4>
                                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta...</p>
                                                        <a href="#" class="basic-link">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="blog-list-item format-standard">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-5">
                                                        <a href="#" class="media-box">
                                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                            <span class="date">
                                                                <span class="day">01</span>
                                                                <span class="month">Apr</span>
                                                            </span>
                                                        </a>
                                                        <div class="blog-item-info">
                                                            <a href="#" class="meta-data">
                                                                <i class="fa fa-comments"></i>
                                                                10 Comments
                                                            </a>
                                                            <div class="meta-data">
                                                                <i class="fa fa-tags"></i>
                                                                <a href="#">Tips</a>
                                                                , <a href="#">Tricks</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7">
                                                        <h4>
                                                            <a href="#">How to Care for your Lawn and Landscaping Before the Winter</a>
                                                        </h4>
                                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta...</p>
                                                        <a href="#" class="basic-link">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="blog-list-item format-standard">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-5">
                                                        <a href="#" class="media-box">
                                                            <img src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                            <span class="date">
                                                                <span class="day">21</span>
                                                                <span class="month">Mar</span>
                                                            </span>
                                                        </a>
                                                        <div class="blog-item-info">
                                                            <a href="#" class="meta-data">
                                                                <i class="fa fa-comments"></i>
                                                                10 Comments
                                                            </a>
                                                            <div class="meta-data">
                                                                <i class="fa fa-tags"></i>
                                                                <a href="#">Tips</a>
                                                                , <a href="#">Tricks</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7">
                                                        <h4>
                                                            <a href="#">How to make your lawn &amp;landscape look it's best?</a>
                                                        </h4>
                                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta...</p>
                                                        <a href="#" class="basic-link">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="padding-tb75 accent-bg parallax-light unwanted" style="background-image:url(images/leaves3.png); background-repeat:repeat">
                        <div class="container">
                            <div class="text-align-center unwanted">
                                <h2>Recently Completed Projects</h2>
                                <hr class="sm">
                            </div>
                            <div class="carousel-wrapper unwanted">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="projects-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                        <li class="item">
                                            <div class="project-grid-item format-image">
                                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                                <h4>
                                                    <a href="single-project.php">Sunshine Garden</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="project-grid-item format-image">
                                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                                <h4>
                                                    <a href="single-project.php">Beautiful Backyard</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="project-grid-item format-image">
                                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                                <h4>
                                                    <a href="single-project.php">Wooden Mansion</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="project-grid-item format-image">
                                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                                <h4>
                                                    <a href="single-project.php">Brick Patio</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="project-grid-item format-image">
                                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box">
                                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                                <h4>
                                                    <a href="single-project.php">Cottage with Picket Fence</a>
                                                </h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Site Footer -->
            <div class="site-footer" id="Footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget footer_widget">
                               <?php include 'footerlinks.php';?>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="widget footer_widget widget_links">
                                <h4 class="widgettitle">
                                    <i class="fa fa-navicon"></i>
                                    Quick Links
                                </h4>
                                <nav role="menu">
                                    <ul>
                                        <li>
                                            <a href="book-service.php">Book a Service</a>
                                        </li>
                                        <li>
                                            <a href="services.php">All Services</a>
                                        </li>
                                        <li class="unwanted">
                                            <a href="faqs.php">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="pricing.php">Our Pricing</a>
                                        </li>
                                        <li class="unwanted">
                                            <a href="projects-grid.php">Completed Projects</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget footer_widget">
                                <h4 class="widgettitle unwanted" id="twitter-header">
                                    <i class="fa fa-twitter"></i>
                                    We are on Twitter
                                </h4>
                                <div class="twitter-widget" data-tweets-count="2"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 unwanted">
                            <div class="widget footer_widget">
                                <h4 class="widgettitle">
                                    <i class="fa fa-comment"></i>
                                    Happy Clients
                                </h4>
                                <div class="carousel-wrapper">
                                    <div class="row">
                                        <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="1" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                            <li class="item">
                                                <div class="testimonial-block">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                                    </blockquote>
                                                    <div class="testimonial-avatar">
                                                        <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" height="60" width="60">
                                                    </div>
                                                    <div class="testimonial-info">
                                                        <div class="testimonial-info-in">
                                                            <strong>Arthur Henry</strong>
                                                            <span>Florida</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="testimonial-block">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                                    </blockquote>
                                                    <div class="testimonial-avatar">
                                                        <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" height="60" width="60">
                                                    </div>
                                                    <div class="testimonial-info">
                                                        <div class="testimonial-info-in">
                                                            <strong>Willie &amp;Heather Obrien</strong>
                                                            <span>Laketown</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Site Footer -->
            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights-col-left">
                                <?php include 'copyright.php';?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights-col-right">
                                <ul class="social-icons-rounded social-icons-colored pull-right unwanted">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="googleplus">
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a id="back-to-top">
                <i class="fa fa-angle-double-up"></i>
            </a>
        </div>
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- Jquery Library Call -->
        <script src="vendor/magnific/jquery.magnific-popup.min.js"></script>
        <!-- PrettyPhoto Plugin -->
        <script src="js/ui-plugins.js"></script>
        <!-- UI Plugins -->
        <script src="js/helper-plugins.js"></script>
        <!-- Helper Plugins -->
        <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>
        <!-- Owl Carousel -->
        <script src="js/bootstrap.js"></script>
        <!-- UI -->
        <script src="js/init.js"></script>
        <!-- All Scripts -->
        <script src="vendor/flexslider/js/jquery.flexslider.js"></script>
        
        <script src="/Template/js/offcanvasmenu.js"></script>
 

    </body>
</html>

