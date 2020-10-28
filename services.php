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
<!--This stylesheet provides the functionality for the off screen menu linked to the Hamburger Icon-->
<link href="/Template/css/responsive3.css" rel="stylesheet">
<link href="/Template/css/actionbar2.css" rel="stylesheet">
<link href="/Template/css/offcanvasmenu2.css" rel="stylesheet">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<script src="https://kit.fontawesome.com/cd61d9ef13.js" crossorigin="anonymous"></script>

<style>

/*
.site-logo a{
    position: relative;
    z-index: 5;
    display: block;
    color: white;
    font-size: 24px;
    height: 30px;
    
}
*/
/*Book Service button*/
#service-submit{
position: fixed;
left: 200px;
bottom: 60px;
z-index: 3;


}

.footer-heading{
    
}
.unwanted{
    display: none;
}

.footer_widget nav ul li a{
	color: #9ABC31!important;
}


.sidebar-widget a{
    color:#A3C245!important;
}

</style>
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
                    <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
                    <a href="/Template/index.php">A&M Landscaping</a>
                </div>
                <div class="site-tagline">Lawn &amp; Landscaping Services</div>
                <a href="#" class="btn btn-default btn-sm unwanted" id="contact-info"><i class="fa fa-bars unwanted"></i></a>
            
    <?php include 'offcanvasmenu.php';?>

            
                <div class="site-header-right">
                	<ul class="header-info-cols">
  						<li>
                        	<span class="icon-col"><i class="fa fa-map-marker"></i></span>
                            <div><div><span>Suite 300 Houston<br>Texas - 77042 USA</span></div></div>
                        </li>
  						<li>
                        	<span class="icon-col"><i class="fa fa-phone"></i></span>
                            <div><div><span><strong>Call us toll free</strong><br>1800-9090-8089</span></div></div>
                        </li>
  						<li>
                        	<span class="icon-col"><i class="fa fa-clock-o"></i></span>
                            <div><div><span><strong>Working Hours</strong><br>Mon - Sat 06:00 to 18:00</span></div></div>
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
    <div class="hero-area">
    	<div class="page-header dark">
        	<div class="container">
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Services</li>
                </ol>
            	<h1>Our Services</h1>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    <a href="/Template/book-service.php"> <button type="submit" id="service-submit" name="service-submit" class="btn btn-primary btn-lg margin-20">Book Service</button></a>

    <div class="widget sidebar-widget widget_custom_menu">
                        	<ul>
                            	<li class="active"><a href="#">All Services</a></li>
                                <li><a href="/Template/services.php#Fall-spring">Fall and Spring Cleanup</a></li>
                                <li><a href="/Template/services.php#Lawncare">Lawn Care</a></li>
                                <li><a href="/Template/services.php#Landscape">Landscape Design</a></li>
                                <li><a href="/Template/services.php#Plants-Flowers">Plants, Flowers, Soils</a></li>
                                <li><a href="/Template/services.php#Tree-Shrub">Tree, Shrub, Turf</a></li>
                                <li><a href="/Template/services.php#Gutter-Cleaning">Gutter Cleaning</a></li>
                            </ul>
                        </div>

                       
            <?php include 'actionbar2.php'?>
                       
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-9 col-sm-8">
                    	<ul class="isotope-grid row">
                            <li class="col-md-4 col-sm-6 grid-item">
                                <div class="service-grid-item format-standard">
                                    <a href="service-single.php" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                    <div class="grid-item-inner">
                                    	<h4><p id="Fall-spring">Fall and Spring Cleanup</p></h4>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        <a href="service-single.php" class="more unwanted">View service details</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 grid-item">
                                <div class="service-grid-item format-standard">
                                    <a href="service-single.php" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                    <div class="grid-item-inner">
                                    	<h4><p id="Lawncare">Lawn Care &amp; Services</p></h4>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        <a href="service-single.php" class="more unwanted">View service details</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 grid-item">
                                <div class="service-grid-item format-standard">
                                    <a href="service-single.php" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                    <div class="grid-item-inner">
                                    	<h4><p id="Landscape">Landscape Design &amp; Installation</p></h4>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        <a href="service-single.php" class="more unwanted">View service details</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 grid-item">
                                <div class="service-grid-item format-standard">
                                    <a href="service-single.php" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                    <div class="grid-item-inner">
                                    	<h4><p id="Plants-Flowers">Plants, Flowers, Soils and Mulches</p></h4>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        <a href="service-single.php" class="more unwanted">View service details</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 grid-item">
                                <div class="service-grid-item format-standard">
                                    <a href="service-single.php" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                    <div class="grid-item-inner">
                                    	<h4><p id="Tree-Shrub">Tree, Shrub &amp; Turf</p></h4>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        <a href="service-single.php" class="more unwanted">View service details</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 grid-item">
                                <div class="service-grid-item format-standard">
                                    <a href="service-single.php" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                    <div class="grid-item-inner">
                                    	<h4><p id="Gutter-Cleaning">Gutter Cleaning</p></h4>
                                        <p>Vestibulum quam nisi, pretium a nibh sit amet, consectetur hendrerit mi. Aenean imperdiet lacus sit amet elit porta, et malesuada erat bibendum. Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        <a href="service-single.php" class="more unwanted">View service details</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                   	</div>
                    <div class="col-md-3 col-sm-4">
                    	<!--<div class="widget sidebar-widget widget_custom_menu">
                        	<ul>
                            	<li class="active"><a href="#">All Services</a></li>
                                <li><a href="service-single.php">Fall and Spring Cleanup</a></li>
                                <li><a href="service-single.php">Lawn Care</a></li>
                                <li><a href="service-single.php">Landscape Design</a></li>
                                <li><a href="service-single.php">Plants, Flowers, Soils</a></li>
                                <li><a href="service-single.php">Tree, Shrub, Turf</a></li>
                                <li><a href="service-single.php">Gutter Cleaning</a></li>
                            </ul>
                        </div>-->
                    	<div class="widget sidebar-widget text_widget">
                        	<div class="accent-bg text_banner">
                            	<h4>Have questions about our services?</h4>
                        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                                <a href="contact.php" class="btn btn-default btn-ghost btn-light" style="color: white!important;">Contact us</a>
                            </div>
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
                    	<h4 class="widgettitle"><i class="fa fa-info-circle"></i> About A&M Landscaping</h4>
                        <p class="unwanted"><img src="images/logo.png" alt=""></p>
                        <p class="footer-heading">A&M Landscaping</p>
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
                        	<li class="unwanted"><a href="faqs.php">FAQs</a></li>
                        	<li><a href="pricing.php">Our Pricing</a></li>
                        	<li class="unwanted"><a href="projects-grid.php">Completed Projects</a></li>
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
                    	<p>&copy; 2016 A&M Landscaping. All Rights Reserved</p>
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
<script src="/Template/js/offcanvasmenu.js"></script>
</body>
</html>