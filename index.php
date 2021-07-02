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
      <title>Welcome to SOLE</title>
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
	<div class="header_section">
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
                                <li> <a class="nav-item nav-link" href="logout.php" id="delete_data">Logout</a></li>
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
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Business as usual </h1>
							<h1 class="mens_text"><strong>High quality shoes</strong></h1>
							<p class="lorem_text">Sole is your classy, drop shipping leather shoes e-store that focuses on compiling first class products from first class brands of leather shoes internationally.</p>
						</div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">

					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
								<h1 class="banner_text">Business as usual </h1>
							<h1 class="mens_text"><strong>High quality shoes</strong></h1>
							<p class="lorem_text">Sole is your classy, drop shipping leather shoes e-store that focuses on compiling first class products from first class brands of leather shoes internationally.</p>
						
						</div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">

					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
									<h1 class="banner_text">Business as usual </h1>
							<h1 class="mens_text"><strong>High quality shoes</strong></h1>
							<p class="lorem_text">Sole is your classy, drop shipping leather shoes e-store that focuses on compiling first class products from first class brands of leather shoes internationally.</p>
						</div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Business as usual </h1>
							<h1 class="mens_text"><strong>High quality shoes</strong></h1>
							<p class="lorem_text">Sole is your classy, drop shipping leather shoes e-store that focuses on compiling first class products from first class brands of leather shoes internationally.</p>
						</div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>			
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!-- new collection section start -->
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>Black Leather Shoes</strong></h1>
    	    <p class="consectetur_text">Essential, classic, stylish, men's black shoes is the answer to every outfit. Formal shoes to wear in universities, work, or social gatherings. These type of shoes are the top of our quality and poses essential styles that can bring out fashion.</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
    	    		<div class="col-md-6">
    	    			<div class="about-img">
    	    				<button class="new_bt">New</button>
    	    				<div class="shoes-img"><img src="images/shoes-img1.png"></div>
    	    				<p class="sport_text">Acuto</p>
    	    				<div class="dolar_text">₱ <strong style="color: rgb(240, 181, 104);">3189</strong> </div>
    	    			</div>
    	    			<div class="buy_now_bt">
						<a href="shoes.html"><button class="buy_text">See More</button></a>	
    					</div>
    	    		</div>
    	    		<div class="col-md-6">
    	    			<div class="about-img2">
    	    				<div class="shoes-img2"><img src="images/shoes-img2.png"></div>
    	    				<p class="sport_text">ECCO</p>
    	    				<div class="dolar_text">₱ <strong style="color: rgb(240, 181, 104);">9450</strong> </div>
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="collection_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Casual Leather Shoes</strong></h1>
    	    <p class="consectetur_text">Come across comfort and style together and add a little touch of class. These casual leather shoes can accentuate your style with their different given designs.</p>
    	</div>
    </div>
    <div class="collectipn_section_3 layuot_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-8">
    					<div class="shoes-img3"><img src="images/shoes-img3.png"></div>
    				</div>
    				<div class="col-md-4">
    					<div class="sale_text"><strong>Bata</strong></div>
    					<div class="number_text"><strong>₱ <span style="color: #0a0506">1500</span></strong></div>
    					
    				</div>
					<div class="col-md-8 ml-auto">
						<div class="buy_now_bt">
						<a href="orderbata.html"><button class="buy_text">Buy Now</button></a>	
    					</div>
					</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>Shoe Products</strong></h1>
    	    <p class="consectetur_text">Well known different brands that showcases various top of the class leather shoes.</p>
    	</div>
    </div>
	<!-- new collection section end -->
	<!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Clarks</p>
    					<div class="shoes_icon"><img src="images/shoes-img4.png"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">₱ <span style="color: rgb(240, 181, 104);">5500</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Madden</p>
    					<div class="shoes_icon"><img src="images/shoes-img5.png"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">₱ <span style="color: rgb(240, 181, 104);">2880</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">East Rock</p>
    					<div class="shoes_icon"><img src="images/shoes-img6.png"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">₱ <span style="color: rgb(240, 181, 104);">1800</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">H2Ocean</p>
    					<div class="shoes_icon"><img src="images/shoes-img7.png"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">₱ <span style="color: rgb(240, 181, 104);">999</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Knight</p>
    					<div class="shoes_icon"><img src="images/shoes-img8.png"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">₱ <span style="color: rgb(240, 181, 104);">3599</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text">Preview</p>
    					<div class="shoes_icon"><img src="images/shoes-img9.png"></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">₱<span style="color: rgb(240, 181, 104);">1799</span></div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="buy_now_bt">
				<a href="shoes.html"><button class="buy_text">Buy Now</button></a>	
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