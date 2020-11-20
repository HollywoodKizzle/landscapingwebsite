

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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="bootstrapdemo.css">
  
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--Styling shared sitewide-->
  <link href="css/responsive3.css" rel="stylesheet">
  <link href="css/actionbar2.css" rel="stylesheet">
  <link href="css/offcanvasmenu2.css" rel="stylesheet">
  <link href="css/topnavbar.css" rel="stylesheet">
  <link href="css/about.css" rel="stylesheet">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->


<!--SCRIPT FOR FONT AWESOME ICONS-->
<script src="https://kit.fontawesome.com/cd61d9ef13.js" crossorigin="anonymous"></script>
<style>









</style>
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<div class="body">
	<!-- Start Header -->
    <div class="header-wrapper">
    	<header class="site-header">
        	<div class="container">
                <div class="site-logo">
                  <!-- <a href="index.php"><img src="images/logo.png" alt="Logo"></a>-->
                    <?php include 'headerlink.php';?>
                </div>
                <div class="site-tagline">Lawn &amp; Landscaping</div>
                <a href="#" class="btn btn-default btn-sm unwanted" id="contact-info"><i class="fa fa-bars unwanted"></i></a>
                
           

                <div class="site-header-right">
                	<ul class="header-info-cols">
  						<li>
                        	<span class="icon-col"><i class="fa fa-map-marker"></i></span>
                            <div><div><span>Suite 300 Houston<br>Texas - 77042 USA</span></div></div>
                        </li>
  						<li>
                        	<span class="icon-col"><i class="fa fa-phone"></i></span>
                            <div><div><a href="tel:+1-<?php echo $phoneinfo;?>"><span><strong>Call us toll free</strong><br>
                            <?php echo $phoneinfo;?></a></span></div></div>
                        </li>
  						<li>
                        	<span class="icon-col"><i class="fa fa-clock-o"></i></span>
                            <div><div><span><strong>Working Hours</strong><br><?php echo $workinghours;?></span></div></div>
                        </li>
                    </ul>
                </div>
            </div>

        </header>

        <div class="main-navigation">
        	<div class="container">
            	<a href="book-service.php" class="btn btn-primary btn-sm pull-right quote-head-btn">Book a service</a>
            	<ul class="pull-right social-icons">
                	<li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                	<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                	<li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                	<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <a href="#" id="menu-toggle">Menu</a>
                <nav role="menu">
                <ul class="dd-menu sf-menu">
                    <li><a href="index.php">Home</a>
                    	<ul class="sub-menu">
                            <li><a href="index2.php">Home version 2</a></li>
                            <li><a href="index.php">Header Styles</a>
                                <ul class="sub-menu">
                                    <li><a href="index.php">Style 1(Default)</a></li>
                                    <li><a href="header-style2.php">Style 2</a></li>
                                    <li><a href="header-style3.php">Style 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.php">About</a>
                    	<ul class="sub-menu">
                            <li><a href="book-service.php">Book a Service</a></li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="faqs.php">FAQs</a></li>
                        </ul>
                    </li>
                    <li><a href="services.php">Services</a>
                    	<ul class="sub-menu">
                            <li><a href="service-single.php">Fall and Spring Cleanup</a></li>
                            <li><a href="service-single.php">Lawn Care</a></li>
                            <li><a href="service-single.php">Landscape Design</a></li>
                            <li><a href="service-single.php">Plants, Flowers, Soils</a></li>
                            <li><a href="service-single.php">Tree, Shrub, Turf</a></li>
                            <li><a href="service-single.php">Gutter Cleaning</a></li>
                        </ul>
                    </li>
                    <li><a href="projects-grid.php">Projects</a>
                    	<ul class="sub-menu">
                            <li><a href="projects-grid.php">Projects Grid</a></li>
                            <li><a href="projects-list.php">Projects List</a></li>
                            <li><a href="projects-gallery.php">Projects Gallery</a></li>
                            <li><a href="single-project.php">Single Project</a></li>
                        </ul>
                    </li>
                    <li class="megamenu"><a href="javascrip:void(0)">Mega Menu</a>
                        <ul class="dropdown">
                            <li>
                                <div class="megamenu-container container">
                                    <div class="row">
                                        <div class="col-md-3 megamenu-col">
                                        	<span class="megamenu-sub-title">Features</span>
                                            <ul class="sub-menu">
                                                <li><a href="shortcodes.php">Shortcodes</a></li>
                                                <li><a href="typography.php">Typography</a></li>
                                                <li><a href="services.php">Services</a></li>
                                                <li><a href="projects-grid.php">Projects</a></li>
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
                                                		<h5><a href="single-post.php">How to make your lawn &amp; Landscape look at its's best</a></h5>
                                                		<span class="meta-data grid-item-meta">Posted on 05 April, 2016</span>
                                                    </li>
                                                	<li>
                                                    	<a href="single-post.php" class="media-box">
                                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                        </a>
                                                		<h5><a href="single-post.php">Time to stay with your family using our services</a></h5>
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
                    <li><a href="blog-list.php">Blog</a>
                    	<ul class="sub-menu">
                            <li><a href="blog-list.php">Blog List</a></li>
                            <li><a href="blog-grid.php">Blog Grid</a></li>
                            <li><a href="single-post.php">Single Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Hero Area -->
    <?php include 'offcanvasmenu.php';?>
    <div class="hero-area removal">
    	<div class="page-header dark">
        	<div class="container">
                <!-- Breadcrumb -->
                <ol class="breadcrumb removal">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            	<h1>About Us</h1>
            </div>
        </div>
    </div>
  

<?php include 'actionbar2.php';?>
<?php include 'topnavbar.php';?>
  
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content padding-b0">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-9 col-sm-7">
                    	<!--<img src="/Pictures/lawn-care-staff-image.jpg" alt="" class="align-left" id="staff-image">-->
                    	<h2 id="staff-image-caption">The lovely staff of <a href="index.php"> <span class="accent-color">A&M Landscaping</span></a></h2>
                    	<div id="Placeholder-Staff-Image">
                    	   <p>Image of Staff goes here</p>
                       </div>
                        <!--<h2 id="staff-image-caption">The lovely staff of<br> <a href="index.php"> <span class="accent-color">A&M Landscaping</span></a></h2>-->
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui. Sed eu risus vel lacus varius varius. Vivamus blandit arcu quis turpis molestie, vulputate vulputate mi ullamcorper. Nunc lacinia eget libero ac cursus. Ut laoreet magna vitae lorem ornare scelerisque. Sed gravida imperdiet leo, ac mollis urna venenatis sit amet. Sed vitae lacus in libero tempor elementum. Cras eleifend hendrerit velit, vel tincidunt enim ornare nec. Proin nec purus leo.</p>
                        <div class="spacer-30"></div>
                       <div class="unwanted"> <hr class="sm">
                        <h2>Our Team</h2>-->
                        <p>Sed et dapibus erat, eget sollicitudin lacus. Etiam nec nisl nec velit iaculis ultrices. Phasellus neque arcu, rutrum ut quam et, consectetur porta libero. Morbi porttitor nunc ac ex consequat pulvinar.</p></div>
                        <div class="carousel-wrapper removal">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="team-slider" data-columns="2" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                    <li class="item">
                                        <div class="team-grid-item grid-item format-image">
                                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h3>Pablo Aguilar</h3>
                                                <span class="meta-data">Gardener</span>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="team-grid-item grid-item format-image">
                                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h3>Evan Lavoie</h3>
                                                <span class="meta-data">Gardener</span>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="team-grid-item grid-item format-image">
                                            <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="magnific-image media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            <div class="grid-item-inner">
                                                <h3>Christian Joss</h3>
                                                <span class="meta-data">Gardener</span>
                                                <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5">
                    	<div class="widget sidebar-widget widget_custom_menu">
                        	<ul>
                            	<li class="active"><a href="about.php" class="sidebar-link">About us</a></li>
                            	<li id="Book-service-link" class="removal"><a href="book-service.php">Book a service</a></li>
                            	<li><a href="pricing.php" class="sidebar-link">Pricing</a></li>
                            	<li id="FAQ-link" class="removal"><a href="faqs.php">Frequently asked questions</a></li>
                            	<li><a href="contact.php" class="sidebar-link">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="widget sidebar-widget text_widget">
                            <div class="feature-block">
                                <h5>Contact Info</h5>
                            <?php include 'addressinfo.php';?>
                            <p><strong>Call us toll free</strong><br>
                              <span class="accent-color">
                                <a href="tel:+1-<?php echo $phoneinfo;?>">
                                <?php echo $phoneinfo;?>
                                </a>
                              </span>
                            </p><br>
                            </div>
                       	</div>
                    	<div class="widget sidebar-widget text_widget">
                        	<a href="#" class="btn btn-primary btn-block removal" id="Download-button"><i class="fa fa-file-pdf-o fa-2x"></i> Download price list</a>
                        	<a href="#" id="Brochure-button" class="btn btn-primary btn-block removal"><i class="fa fa-file-pdf-o fa-2x"></i> Download brochure</a>
                        </div>
                        <div class="widget sidebar-widget">
                            <div class="carousel-wrapper removal">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                        <li class="item">
                                            <div class="testimonial-block removal">
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                                </blockquote>
                                                <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" height="60" width="60"></div>
                                                <div class="testimonial-info">
                                                    <div class="testimonial-info-in">
                                                        <strong>Arthur Henry</strong><span>Florida</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="testimonial-block removal">
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                                </blockquote>
                                                <div class="testimonial-avatar"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="" height="60" width="60"></div>
                                                <div class="testimonial-info">
                                                    <div class="testimonial-info-in">
                                                        <strong>Willie &amp; Heather Obrien</strong><span>Laketown</span>
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
            <div class="spacer-40"></div>
            <div class="padding-tb45 shadow-row parallax-light accent-bg counters" style="background-image:url(images/leaves1.png); background-repeat:repeat">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-tree fa-4x"></i> </div>
                            <div class="timer" data-perc="1500"> <span class="count">6400</span> </div>
                            <span class="fact">Trees Planted</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-users fa-4x"></i> </div>
                            <div class="timer" data-perc="36"> <span class="count">36</span> </div>
                            <span class="fact">Team Members</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-map-signs fa-4x"></i> </div>
                            <div class="timer" data-perc="24"> <span class="count">24</span> </div>
                            <span class="fact">Office Locations</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="fact-ico"> <i class="fa fa-hand-peace-o fa-4x"></i> </div>
                            <div class="timer" data-perc="1000"> <span class="count">1000</span> </div>
                            <span class="fact">Projects Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   	</div>
    <!-- Site Footer -->
    <div class="site-footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-3 col-sm-6">
                	<div class="widget footer_widget">
                    	<?php include 'footerlinks.php';?>
                        <p class="unwanted"><img src="images/logo.png" alt=""></p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                    </div>
                </div>
            	<div class="col-md-3 col-sm-6">
                	<div class="widget footer_widget widget_links">
                    	<h4 class="widgettitle"><i class="fa fa-navicon"></i> Quick Links</h4>
                        <nav role="menu">
                        <ul>
                        	<li><a href="book-service.php">Book a Service</a></li>
                        	<li><a href="services.php">All Services</a></li>
                        	<li class="removal"><a href="faqs.php">FAQs</a></li>
                        	<li><a href="pricing.php">Our Pricing</a></li>
                        	<li class="unwanted"><a href="projects-grid.php" class="removal">Completed Projects</a></li>
                        </ul>
                        </nav>
                    </div>
                </div>
            	<div class="col-md-3 col-sm-6 unwanted">
                	<div class="widget footer_widget">
                    	<h4 class="widgettitle"><i class="fa fa-twitter"></i> We are on Twitter</h4>
                        <div class="twitter-widget" data-tweets-count="2"></div>
                    </div>
               	</div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget footer_widget">
                        <h4 class="widgettitle"><i class="fa fa-calculator"></i> Request an Estimate</h4>
                        <form method="post" id="quoteform" name="quoteform" class="quick-quote clearfix" action="mail/quote.php">
                            <input name="quote-name" id="quote-name" type="text" placeholder="Your Name" class="form-control">
                            <input name="quote-email" id="quote-email" type="email" placeholder="Your Email" class="form-control">
                            <select name="quote-service" id="quote-service" class="form-control selectpicker">
                            <option>Select Service</option>
                                <option>Fall and Spring Cleanup</option>
                                <option>Lawn Care</option>
                                <option>Landscape Design</option>
                                <option>Plants, Flowers, Soils</option>
                                <option>Tree, Shrub, Turf</option>
                                <option>Gutter Cleaning</option>
                            </select>
                            <input id="quote-submit" name="quote-submit" type="submit" value="Submit" class="btn btn-primary btn-block">
            				<div id="Quote-message" class="accent-color"></div>
                        </form>
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
                            <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
               	</div>
           	</div>
      	</div>
  	</div>
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src="js/jquery-2.2.3.min.js"></script> <!-- Jquery Library Call -->
<script src="vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- PrettyPhoto Plugin -->
<script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="js/offcanvasmenu.js"></script>
</body>
</html>