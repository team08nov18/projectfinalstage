<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cinebuzz">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
    
    <title>Cinebuzz</title>
    
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
   

<div class="super_container">

	<div class="home">
		<div class="home_slider_container">
			
			
			<div class="owl-carousel owl-theme home_slider">
								
				
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/aquaman.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">New Release</div>
								<div class="home_title"><h1>AQUAMAN</h1></div>
								<div class="home_link"><a href="booking.php">Book Now</a></div>
							</div>
						</div>
					</div>
				</div>
				
			
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/dp.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">New Release</div>
								<div class="home_title"><h1>DEADPOOL 2</h1></div>
								<div class="home_link"><a href="booking.php">Book Now</a></div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/marypoppins.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">New Release</div>
								<div class="home_title"><h1>MARY POPPINS</h1></div>
								<div class="home_link"><a href="booking.php">Book Now</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<div class="shows">
		<div class="container">
			<div class="row" style="z-index:10;">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle"></div>
						<div class="section_title"><h1>UPCOMING MOVIES</h1></div>
					</div>
				</div>
			</div>
			<div class="row shows_row">
				
				
				<div class="col-lg-8 order-lg-1 order-2 shows_list_col">
					<div class="shows_list_container">
						<ul class="shows_list">
							<iframe width="670" height="400" src="https://www.youtube.com/embed/Z1BCujX3pw8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 		picture-in-picture" allowfullscreen></iframe>
						</ul>
					</div>
				</div>

				
				<div class="col-lg-4 order-lg-2 order-1">
					<div class="shows_image">
						<div class="image_overlay"></div>
						<img src="images/spider.jpg" alt="https://unsplash.com/@anthonydelanoix">
					</div>
				</div>

			</div>
		</div>
	</div>

	

	<div class="artist">
		<div class="container">
			<div class="row">

				
				<div class="col-lg-4 artist_image_col">
					<div class="artist_image">
						<img src="images/reclinerseats.jpg" alt="">
					</div>
				</div>

				
				<div class="col-lg-7 offset-lg-1">
					<div class="artist_content">
						<div class="section_title_container">
							<div class="section_subtitle">Events</div>
							<div class="section_title"><h1>THE ULTIMATE LUXURY CINEMA EXPERIENCE</h1></div>
						</div>
						<div class="artist_text">
							<p> Travel first class at the movies with the laid back luxury of Platinum Class. With wall to wall screens, fully reclining arm chairs and food and drinks delivered to your seat throughout the movie. Why not arrive early to our exclusive Platinum Class lounge and have a drink. It’s the perfect place to catch up and begin to unwind before the movie even begins.
						</div>
						<div class="artist_sig"><img src="images/sig.png" alt=""></div>
						
					</div>
				</div>

			</div>
		</div>
	</div>	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="js/custom.js"></script>
</body>
           
	
<?php include("include/footer.inc") ?>
</body>
</html>