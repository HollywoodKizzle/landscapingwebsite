
<!doctype html>
<html>
<head>
    

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    
    <script src="https://kit.fontawesome.com/cd61d9ef13.js" crossorigin="anonymous"></script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--Styling for the off canvas menu-->
<link href="/Template/css/offcanvasmenu.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css">        
 


 <style>

.col-md-3{

    position:relative;
    top: 40px;


}

.col-md-3 h4, .fa{
    font-size: 24px!important;
    color: #9B9B9B!important;
    
}

.site-logo a{
    position: relative;
    z-index: 5;
    display: block;
    color: white;
    font-size: 24px;
    height: 50px;
    top: 15px;
    left: 20px;

}
.site-logo{
    float: initial;
}
.container h1{
    font-size: 24px;

}


 </style>      
</head>

<body>

<div class="site-logo">
                   <!-- <a href="index.html"><img src="images/logo.png" alt="Logo">-->
                   <a href="/Template/index.html">  A&M Landscaping
                   </a>
                </div>

                <div class="page-header" style="background-image:url(http://placehold.it/1400x300&amp;text=IMAGE+PLACEHOLDER); background-repeat:no-repeat; background-position:center bottom;">
        	<div class="container">
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Request a Quote</li>
                </ol>
            	<h1>Request a Quote</h1>
            </div>
        </div>
 <!--<?php include 'offcanvasmenu.php';?>-->

<div class="col-md-3 col-sm-6">
                    <div class="widget footer_widget">
                        <h4 class="widgettitle"><i class="fa fa-calculator"></i> Request a Quote</h4>
                        <form method="post" id="quoteform" name="quoteform" class="quick-quote clearfix" action="mail/quote.php">
                            <input name="quote-name" id="quote-name" type="text" placeholder="Your Name" class="form-control">
                            <input name="quote-email" id="quote-email" type="email" placeholder="Your Email" class="form-control">
                            <input name="quote-number" id="quote-number" type="tel" placeholder="Your Phone Number" class="form-control">
                            <select name="quote-service" id="quote-service" class="form-control selectpicker">
                            <option>Select Service</option>
                                <option>Fall and Spring Cleanup</option>
                                <option>Lawn Care</option>
                                <option>Landscape Design</option>
                                <option>Plants, Flowers, Soils</option>
                                <option>Tree, Shrub, Turf</option>
                                <option>Gutter Cleaning</option>
                            </select>

                            <label>Special Instructions</label>
                                    <textarea name="service-comments" id="service-comments" class="form-control input-lg" rows="6"></textarea>
                            <input id="quote-submit" name="quote-submit" type="submit" value="Submit" class="btn btn-primary btn-block">
            				<div id="Quote-message" class="accent-color"></div>
                        </form>
                    </div>
                </div>

</body>
</html>
