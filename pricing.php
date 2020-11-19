<?php
$phoneinfo= "919-628-6766";
$workinghours="Mon-Sat 9am-5pm";
?>

<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>GreensKeeper - Gardening and Landscaping Responsive HTML5 Template</title>
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
<!--<link rel="stylesheet" href="bootstrapdemo.css">-->
  

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--This stylesheet provides the functionality for the off screen menu linked to the Hamburger Icon-->

<!--Styles shared by all pages-->

<link href="/Template/css/responsive3.css" rel="stylesheet">
<link href="/Template/css/actionbar2.css" rel="stylesheet">
<link href="/Template/css/offcanvasmenu2.css" rel="stylesheet">
<link href="/Template/css/topnavbar.css" rel="stylesheet">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<script src="https://kit.fontawesome.com/cd61d9ef13.js" crossorigin="anonymous"></script>
<style>


/*Remove the default Template background image*/
.page-header{
   /* display: none;*/
}



.hero-area h1{
    width: 155px;
}

#main-container{
    display: block;
}
.unwanted{
    display: none;
}

/**Configuring the call to action bar
#main-nav-menu {
    position: fixed;
    right: 0px;
    z-index: 6;
    background-color: white;
    border-style: solid;
    border-width: 1px;
    height: 70px;
    width: 370px;
    border-right: none;
    border-left: none;
    bottom: 0px;
    border-bottom: none;
} */

/*
#call-to-action-bar{
    right: -4px;
    bottom: -6px;

}

#call-to-action-bar-captions{
    bottom: 0px;
    font-size: 16px;
}*/

/*Configuring the header
.site-logo a{
    position: relative;
    z-index: 5;
    display: block;
    color: white;
    font-size: 24px;
    height: 50px;
    top: 15px;
}
*/
.footer_widget nav ul li a{
	color: #9ABC31!important;
}

.sidebar-widget a{
	color: #9ABC31!important;
}

.footer-heading{
font-size: 24px!important;
color: white!important;}
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
                   <!-- <a href="index.php"><img src="images/logo.png" alt="Logo">-->
                  <?php include 'headerlink.php';?>
                </div>
                <div class="site-tagline">Lawn &amp; Landscaping Services</div>
                <a href="#" class="btn btn-default btn-sm" id="contact-info"><i class="fa fa-bars unwanted"></i></a>
                

            


                
                <div class="site-header-right">
                	<ul class="header-info-cols">
  						<li>
                        	<span class="icon-col"><i class="fa fa-map-marker"></i></span>
                            <div><div><span>Suite 300 Houston<br>Texas - 77042 USA</span></div></div>
                        </li>
  						<li>
                        	<span class="icon-col"><i class="fa fa-phone"></i></span>
                            <div><div>
                            <a href="tel:+1<?php echo $phoneinfo;?>"><span><strong>Call us toll free</strong><br>
                          <?php echo $phoneinfo;?></span></a></div></div>
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
                            <li class="unwanted"><a href="faqs.php" class="unwanted">FAQs</a></li>
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
    <?php include 'offcanvasmenu.php';?> 
    <!-- Start Hero Area -->
    <div class="hero-area">
    	<div class="page-header" style="background-image:url(http://placehold.it/1400x300&amp;text=IMAGE+PLACEHOLDER); background-repeat:no-repeat; background-position:center bottom;">
        	<div class="container">
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Pricing</li>
                </ol>
            	<h1>Our Pricing</h1>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">

    <?php include 'actionbar2.php';?>
    <?php include 'topnavbar.php';?>
    
    
    	<div class="content">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-9 col-sm-7">
                    	<p>We would be delighted to serve you with our services, just use the <a href="book-service.php">form available here</a> or choose the services you are interested in and we will be in touch with you in few hours. We’re available from Monday to Saturday, 06:00-18:00 to take your call.</p>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="success">
                                        <th><strong>Service</strong></th>
                                        <th><strong>Price</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td>Mowing &amp; Edging</td>
                                        <td>From $45</td>
                                    </tr>
                                    <tr>
                                    	<td>Garden Maintenance</td>
                                        <td>From $65</td>
                                    </tr>
                                    <tr>
                                    	<td>Hedging</td>
                                        <td>From $55</td>
                                    </tr>
                                    <tr>
                                    	<td>Slashing</td>
                                        <td>From $75</td>
                                    </tr>
                                    <tr>
                                    	<td>Rubbish Removal</td>
                                        <td>From $45</td>
                                    </tr>
                                    <tr>
                                    	<td>Gutter Cleaning</td>
                                        <td>From $55</td>
                                    </tr>
                                    <tr>
                                    	<td>Weed Spraying</td>
                                        <td>From $35</td>
                                    </tr>
                                    <tr>
                                    	<td>Fertilising</td>
                                        <td>From $30</td>
                                    </tr>
                                    <tr>
                                    	<td>Rooftop Gardening at Heights</td>
                                        <td>From $140/hr</td>
                                    </tr>
                                    <tr>
                                    	<td>Palm Tree Cleaning</td>
                                        <td>From $30/tree</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        
        		
                        
                        <div class="alert alert-default">All other services will need to be quoted. Please refer to the terms &amp; conditions below regarding accounts, quotes and payments.</div>
						<hr class="fw">
                        <h4 class="unwanted">TURF</h4>
                        <ul class="angles unwanted">
                        	<li>Blue Couch from $16 per square metre</li>
                        	<li>Sir Walter from $27.50 per square metre</li>
                        	<li>All prices include supply and laying of turf including an under lay of soil up to 20mm</li>
                        	<li>A delivery charge of $50 will apply to all turf orders under 50 square metres.</li>
                     	</ul>
						<h4 class="unwanted">MULCH</h4>
                        <ul class="angles unwanted">
                        	<li>Hoop Bark Medium from $150 per cubic metre</li>
                        	<li>Tea Tree Mulch from $135 per cubic metre</li>
                        	<li>Forest Mulch from $135 per cubic metre</li>
                        	<li>All prices include supply and laying of mulch.  Additional charges may apply if we need to negotiate stairs or other obstacles or if we need to move materials greater than 30 metres.</li>
                        	<li>A delivery charge of $30 will also apply for each delivery of mulch up 3 cubic metres.</li>
                       	</ul>
						<hr class="fw">
						<h3>TERMS &amp; CONDITIONS</h3>
						<h4 class="unwanted">New Clients</h4>
						<p class="unwanted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui.</p>
                        <p class="unwanted">Sed eu risus vel lacus varius varius. Vivamus blandit arcu quis turpis molestie, vulputate vulputate mi ullamcorper. Nunc lacinia eget libero ac cursus. Ut laoreet magna vitae lorem ornare scelerisque.</p>
						<h4 class="unwanted">All Clients</h4>
						<p class="unwanted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui.</p>
                        <p class="unwanted">Sed eu risus vel lacus varius varius. Vivamus blandit arcu quis turpis molestie, vulputate vulputate mi ullamcorper. Nunc lacinia eget libero ac cursus. Ut laoreet magna vitae lorem ornare scelerisque.</p>
                        <h4 class="unwanted">Priority Booking</h4>
						<p class="unwanted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor lacinia diam quis imperdiet. Proin vitae iaculis nisl. Cras eleifend quam lectus, sed bibendum libero convallis at. Nulla sagittis convallis neque at scelerisque. Pellentesque placerat bibendum magna, semper accumsan sem congue nec. Etiam viverra, ipsum vel suscipit varius, neque odio suscipit orci, et molestie metus mi a dui.</p>
                        <p class="unwanted">Sed eu risus vel lacus varius varius. Vivamus blandit arcu quis turpis molestie, vulputate vulputate mi ullamcorper. Nunc lacinia eget libero ac cursus. Ut laoreet magna vitae lorem ornare scelerisque.</p>

                   	</div>
                    <div class="col-md-3 col-sm-5">
                    	<div class="widget sidebar-widget widget_custom_menu">
                        	<ul>
                            	<li><a href="about.php">About us</a></li>
                            	<li><a href="book-service.php">Book a service</a></li>
                            	<li class="active"><a href="pricing.php">Pricing</a></li>
                            	<li class="unwanted"><a href="faqs.php">Frequently asked questions</a></li>
                            	<li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="widget sidebar-widget text_widget">
                            <div class="feature-block">
                                <h5>Contact Info</h5>
                                <p>Suite 300 Houston<br>Texas - 77042 USA</p><br>
                                <p><strong>Call us toll free</strong><br><span class="accent-color"><a href="tel:+1-919-628-6766">919-628-6766</a></span></p><br>
                            </div>
                       	</div>
                    	<div class="widget sidebar-widget text_widget">
                        	<a href="#" class="btn btn-primary btn-block unwanted"><i class="fa fa-file-pdf-o fa-2x"></i> Download price list</a>
                        	<a href="#" class="btn btn-primary btn-block unwanted"><i class="fa fa-file-pdf-o fa-2x"></i> Download brochure</a>
                        </div>
                        <div class="widget sidebar-widget">
                            <div class="carousel-wrapper unwanted">
                                <div class="row">
                                    <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="1" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="1" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                        <li class="item">
                                            <div class="testimonial-block">
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
                                            <div class="testimonial-block">
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
        </div>
   	</div>
    <!-- Site Footer -->
    <div class="site-footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-3 col-sm-6">
                	<div class="widget footer_widget">
                    	<?php include 'footerlinks.php';?>
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
<script src="/Template/js/offcanvasmenu.js"></script>
</body>
</html>