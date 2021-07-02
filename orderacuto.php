<?php
 session_start();

 if (!isset($_SESSION['username'])) {
   header("Location: login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Order</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section header_main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="#"><img src="images/logo.png"></a></div>
				</div>
				<div class=" ml-auto">
					<nav class="navbar navbar-expand-lg navbar-light bg-light ml-auto">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
							<ul>
								<li> <a class="nav-item nav-link" href="index.php">Home</a></li>
								<li> <a class="nav-item nav-link" href="shoes.php">Shoes</a></li>
								<li><a class="nav-item nav-link" href="contact.php">Contact</a></li>
								<li class="cart"><a class="nav-item nav-link" href="cart.php"><span>0</span><img src="images/shop_icon.png"></a></li>
							</ul>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
   	<!-- contact section start -->
    <div class="layout_padding contact_section"> </div>

        <div class="container">
    		<div class="row">
				<div class="col-md-12"> 
                <img src="images/shoes-img1.png" alt="Acuto">
                <h1>Acuto</h1>
                <p class="price">Price:$19.99</p>
                <p>Please select your size(US):</p>
                <input type="radio" name="choice" id=""> 7
                <input type="radio" name="choice" id=""> 7.5
                <input type="radio" name="choice" id=""> 8
                <input type="radio" name="choice" id=""> 8.5
                <input type="radio" name="choice" id=""> 9
                <input type="radio" name="choice" id=""> 9.5
                <input type="radio" name="choice" id=""> 10
                <input type="radio" name="choice" id=""> 10.5
                </div>
             </div>
    	    </div>
            	<div class="collection_section layout_padding"></div>
          <div class="container">
            <div class="row">
				<div class="col-md-12"> 
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                    <button class="seemore_bt"><a class="add-cart cart7" href="#">Add to cart(1 Quantity)</a></button>
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                    <a class="add-cart cartv invisible" href="#">Add to cart</a>
                </div>
              </div>
        </div>
       


	<div class="collection_section layout_padding"></div>
   	<!-- contact section end -->
	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-3">
    					<div><a href="#"><img src="images/footer-logo.png"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(69) 9065988681</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">solePH@gmail.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="social_icon">
    						<ul>
    							<li><a href="https://www.facebook.com/Sole-PH-112352877747178/"><img src="images/fb-icon.png"></a></li>
    							<li><a href="https://twitter.com/solePH3?s=09"><img src="images/twitter-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
					<div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">6 Santan Street, Payatas-A, Quezon City</span></div>
    		        </div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>			
    				    		<li>About us</li>						
    				    		<li><a class = "unique" href="contact.html">Contact us</a></li>
    				    	</ul>
    				    </div>
    		        </div>
    			</div>
    			</div>
    	        </div> 
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">Copyright © 2021 SOLE Philippines. All Rights Reserved. <a href="https://html.design"></div>


      <!-- Javascript files-->
     <script src="main.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>
