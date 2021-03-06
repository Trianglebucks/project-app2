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
      <title>Shop</title>
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
		<div class="container-fluid">
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
	<!-- New Arrivals section start -->
  <div class="collection_text">Shoes</div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>Our Shoes Products</strong></h1>
    	    <p class="consectetur_text">Well known different brands that showcases various top of the class leather shoes.</p>
    	</div>
    </div>
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Clarks</p>
    					<div class="shoes_icon"><img src="images/shoes-img4.png" onmouseover="this.src='images/clarkhover.png'" onmouseout="this.src='images/shoes-img4.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<a href="orderclark.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">???<span style="color: #ff4e5b;">5500</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Madden</p>
    					<div class="shoes_icon"><img src="images/shoes-img5.png" onmouseover="this.src='images/maddenhover.png'" onmouseout="this.src='images/shoes-img5.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
    	    						<a href="ordermadden.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">???<span style="color: #ff4e5b;">2880</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">East Rock</p>
    					<div class="shoes_icon"><img src="images/shoes-img6.png" onmouseover="this.src='images/eastrockhover.png'" onmouseout="this.src='images/shoes-img6.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
    	    						<a href="ordereastrock.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">???<span style="color: #ff4e5b;">1800</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">H2Ocean</p>
    					<div class="shoes_icon"><img src="images/shoes-img7.png" onmouseover="this.src='images/h2oceanhover.png'" onmouseout="this.src='images/shoes-img7.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
									<a href="orderh2ocean.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">??? <span style="color: #ff4e5b;">999</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Knight</p>
    					<div class="shoes_icon"><img src="images/shoes-img8.png" onmouseover="this.src='images/knighthover.png'" onmouseout="this.src='images/shoes-img8.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
								<a href="orderknight.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">??? <span style="color: #ff4e5b;">3599</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Preview</p>
    					<div class="shoes_icon"><img src="images/shoes-img9.png" onmouseover="this.src='images/previewhover.png'" onmouseout="this.src='images/shoes-img9.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<a href="orderpreview.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">??? <span style="color: #ff4e5b;">1799</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
			
			<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Acuto</p>
    					<div class="shoes_icon"><img src="images/shoes-img1.png" onmouseover="this.src='images/acutohover.png'" onmouseout="this.src='images/shoes-img1.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
									<a href="orderacuto.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">??? <span style="color: #ff4e5b;">3189</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">ECCO</p>
    					<div class="shoes_icon"><img src="images/shoes-img2.png" onmouseover="this.src='images/eccohover.png'" onmouseout="this.src='images/shoes-img2.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
								<a href="orderecco.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">??? <span style="color: #ff4e5b;">9450</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Bata</p>
    					<div class="shoes_icon"><img src="images/shoes-img10.png" onmouseover="this.src='images/batahover.png'" onmouseout="this.src='images/shoes-img10.png'"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<a href="orderbata.html"><span style="font-size:1.5em;">BUY</span></a>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">??? <span style="color: #ff4e5b;">1500</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- New Arrivals section end -->
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
   
	<!-- section footer end -->
	<div class="copyright">Copyright ?? 2021 SOLE Philippines. All Rights Reserved. <a href="https://html.design"></div>


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
