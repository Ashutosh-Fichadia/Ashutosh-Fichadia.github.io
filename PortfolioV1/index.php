<?php
	session_start();
	if(isset($_COOKIE["uname"]))
	{
		$_SESSION["uname"]=$_COOKIE["uname"];
		header('location: welcome.php');
	}

?>


<!DOCTYPE html><html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AF | Home</title>
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png"><link rel="manifest" href="https://markup.themewagon.com/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff"><!--  Stylesheets
=============================================
--><!-- Default stylesheets--><link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Template specific stylesheets--><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="assets/lib/animate.css/animate.css" rel="stylesheet"><link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet"><link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet"><link href="assets/lib/flexslider/flexslider.css" rel="stylesheet"><link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet"><link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet"><link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet"><link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet"><!-- Main stylesheet and color file--><link href="assets/css/style.css" rel="stylesheet"><link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
		<main>
			<div class="page-loader">
				<div class="loader">Loading...</div>
			</div>
			<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand">AF</a>
					</div>
					<div class="collapse navbar-collapse" id="custom-collapse">
						
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="index.php" >HOME</a>
							</li>
							<li class="dropdown">
								<a href="home.php" >Welcome</a>
							</li>
							<li class="dropdown">
								<a href="work.php" >Work</a>
							</li>
							<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown">PAGES</a>
								<ul class="dropdown-menu">
									<li>
										<a href="Login.php">LOGIN-REGISTER</a>
									</li>
									
								</ul>
						</li>
							
										
						</ul>
					</div>
				</div>
			</nav>
	<section class="home-section home-fade home-full-height bg-dark-60 landing-header" id="home" data-background="assets/images/landing/landing_bg.jpg">
		<div class="titan-caption">
			<div class="caption-content">
				<div class="container">
					<div class="font-alt mb-30 titan-title-size-4">COME ABOARD!</div>
					<div class="font-alt">COMPLETE PORTFOLIO OF MY WORK IN <br>WEB TECHNOLOGY FROM THE SCRATCH.VISIT THE WORK!!</div><div class="font-alt mt-30">
						<a class="btn btn-border-w btn-circle" href="Login.php">
							LET'S GO</a>
					</div></div>
			</div></div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<img class="img-responsive banner-img" src="assets/images/landing/banner_img.png">
			</div>
		</div>
	</div>
	<div class="main">
		<section class="module-medium" id="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="module-title font-alt">WELCOME TO MY PORTFOLIO</h2>
						<div class="module-subtitle font-serif large-text">I Ashutosh Fichadia am building a fully responsive website in order to help and make a view of my total work which is supported in multiple platforms.</div>
							<div class="text-center">
								<div class="btn-group mt-30">
									<a class="btn btn-border-d btn-circle" ><i class="fa fa-apple" style="font-size:36px"></i> APPLE</a>
									<a class="btn btn-border-d btn-circle"><i class="fa fa-linux" style="font-size:36px"></i> LINUX</a>
									<a class="btn btn-border-d btn-circle" ><i class="fa fa-windows" style="font-size:36px"></i> WINDOWS</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
		</section>
		</div>
		<section class="module pb-0 bg-dark landing-reason parallax-bg" data-background="assets/images/landing/why_choose_bg.png">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12"><h2 class="module-title font-alt align-center">WHY IT IS WORTH WATCHING</h2>
						<p class="module-subtitle font-serif align-center">A wonderful work is done on learning side 
							with clear code and neat 
							representation with full transparency for majorly students.</p>
						<p class="module-subtitle font-serif align-center">Code is Given Along with the output of every tiniest project ever did by me.</p>
						<p class="module-subtitle font-serif align-center">You Just Need To get Signed Up!</p>
					</div>
				</div>
			</div>
		</section>
	
	<section>
		<div class="container">
			<div class="row landing-image-text">
				<div class="col-sm-6">
					<img class="center-block" src="assets/images/landing/iphone-mockup.png" alt="">
				</div>
				<div class="col-sm-6"><h2 class="font-alt">HOW IT WORKS</h2><p class="font-serif">Simply Follow The Following Steps:</p>
					<ul>
						<li>SIGN UP</li>
						<li>LOGIN</li>
						<li>SELECT ANY OF THE GIVEN OUTPUTS.</li>
						<li>GET THE CODE! FOR FREE</li>
					</ul>
					<a class="btn btn-border-d btn-circle" href="Login.php">SIGN UP!</a>
				</div>
			</div>
		</div>
	</section>
	
	<section class="module bg-dark parallax-bg landing-screenshot" data-background="assets/images/landing/screenshot_bg.png"><div class="container"><div class="row"><div class="col-sm-6 col-sm-offset-3"><h2 class="module-title font-alt">SCREENSHOTS</h2><div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div></div></div><div class="row client"><div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false"><div class="owl-item"><div class="col-sm-12"><img src="assets/images/landing/screenshot1.jpg" alt="App Screenshot"></div></div><div class="owl-item"><div class="col-sm-12"><img src="assets/images/landing/screenshot2.jpg" alt="App Screenshot"></div></div><div class="owl-item"><div class="col-sm-12"><img src="assets/images/landing/screenshot3.jpg" alt="App Screenshot"></div></div><div class="owl-item"><div class="col-sm-12"><img src="assets/images/landing/screenshot4.jpg" alt="App Screenshot"></div></div><div class="owl-item"><div class="col-sm-12"><img src="assets/images/landing/screenshot5.jpg" alt="App Screenshot"></div></div><div class="owl-item"><div class="col-sm-12"><img src="assets/images/landing/screenshot6.jpg" alt="App Screenshot"></div></div></div></div></div></section>
	
		<section class="module download pb-0"><img src="assets/images/landing/landscap-mockup.jpg"></div></section>
	<footer class="footer bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<p class="copyright font-alt">&copy; 2020&nbsp;<a href="index.html">AF</a>, ALL RIGHTS RESERVED</p>
				</div>
				<div class="col-sm-6">
					<div class="footer-social-links">
						
						<a href="#"><i class="fa fa-linkedin" style="font-size:20px"></i></a>
						<a href="#"><i class="fa fa-twitter" style="font-size:20px"></i></a>
						<a href="#"><i class="fa fa-facebook" style="font-size:20px"></i></a>
						<a href="#"><i class="fa fa-instagram" style="font-size:20px"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	</div><div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div></main>
	<!--  JavaScripts
=============================================--><script src="assets/lib/jquery/dist/jquery.js"></script><script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script><script src="assets/lib/wow/dist/wow.js"></script><script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script><script src="assets/lib/isotope/dist/isotope.pkgd.js"></script><script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script><script src="assets/lib/flexslider/jquery.flexslider.js"></script><script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script><script src="assets/lib/smoothscroll.js"></script><script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script><script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script><script src="assets/js/plugins.js"></script><script src="assets/js/main.js"></script>
	
	
</body>
</html>