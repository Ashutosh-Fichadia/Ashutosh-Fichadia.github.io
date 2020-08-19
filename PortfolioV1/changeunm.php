<?php
	session_start();
	if(!isset($_SESSION["uname"]))
	{
		header('location: index.php');
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AF | Welcome</title>
	<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png"><link rel="manifest" href="https://markup.themewagon.com/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff"><!--  Stylesheets
=============================================
--><!-- Default stylesheets--><link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Template specific stylesheets--><link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="assets/lib/animate.css/animate.css" rel="stylesheet"><link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet"><link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet"><link href="assets/lib/flexslider/flexslider.css" rel="stylesheet"><link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet"><link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet"><link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet"><link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet"><!-- Main stylesheet and color file--><link href="assets/css/style.css" rel="stylesheet"><link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
		<main>
			<div class="page-loader">
				<div class="loader">Loading...</div>
			</div>
			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" >AF</a>
			</div>
			<div class="collapse navbar-collapse" id="custom-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a  href="welcome.php" >HOME</a>
					</li>
					<li class="dropdown">
								<a href="work.php" >WORK</a>
							</li>
					<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown"><?php
								echo "<i class='fa fa-user' style='font-size:18px'></i> ".$_SESSION["uname"];
								?></a>
								<ul class="dropdown-menu">
									<li class="dropdown">
										<a href="#" data-toggle="dropdown">ACCOUNT SETTINGS<i class="fa fa-gear fa-spin" style="font-size:18px"></i></a>
										<ul class="dropdown-menu">
											<li>
												<a href="changeunm.php"><i class="fa fa-pencil" style="font-size:14px"></i> CHNAGE USERNAME-PASSWORD</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="mylogout.php">LOGOUT<i class="fa fa-sign-out" style="font-size:18px"></i></a>
									</li>
								</ul>
							</li>
				</ul>
				
			
		</div>
	</div>
	</nav>
			<section class="module bg-dark-30" data-background="assets/images/agency/agency_bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h1 class="module-title font-alt mb-0">CHANGE USERNAME</h1>
					</div>
				</div>
			</div>
		</section>
		</main>
	
	<section class="module">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-sm-offset-1 mb-sm-40">
						<h4 class="font-alt">CHANGE USERNAME</h4>
						<hr class="divider-w mb-10">
						
						<form class="form" action="changeunm.php" method="post" >
							<div class="form-group">
								<?php
								echo "<input class='form-control' id='email' type='text' name='email' value='".$_SESSION['email']."' readonly/>"; 
								?>
							</div>
							<div class="form-group">
								<input class="form-control" id="uname" type="text" name="uname" placeholder="ENTER NEW USERNAME" required/>
							</div>
							
							<br>
							<div class="form-group">
								<input type="submit" name="btn" value="SUBMIT" class="btn btn-round btn-b">
							</div>
						</form>					
					</div>
					
					<?php
						if(isset($_REQUEST["btn"]))
						{
							$nunm = $_REQUEST["uname"];
							$mail= $_REQUEST["email"];
                                                        
							include("db.php");
							$uqry= "update titan SET username='$nunm' WHERE email='$mail'";
							if(mysqli_query($conn,$uqry))
							{
								echo '<script>alert("Username Updated Successfully!")</script>';
								$_SESSION["uname"]=$nunm;
								
							}
							else
							{
								echo '<script>alert("Username Update Failed!")</script>';
							}
						}
					
					
					
					?>
					<div class="col-sm-5">
						<h4 class="font-alt">CHANGE PASSWORD</h4>
						<hr class="divider-w mb-10">
						
						<form class="form" action="changeunm.php" method="post">
							<div class="form-group">
								<?php
									echo "<input class='form-control' id='email' type='text' name='email' value='".$_SESSION['email']."'readonly/>"; 
								?>
							</div>
							<div class="form-group">
								<input class="form-control" id="op" type="password" name="op" placeholder="ENTER OLD PASSWORD" required/>
							</div>
							<div class="form-group">
								
								<input class="form-control" id="password" type="password" name="password"placeholder="NEW PASSWORD"required/>
							</div>
							<div class="form-group">
								<input class="form-control" id="re-password" type="password" name="re-password" placeholder="RE-ENTER PASSWORD" required/>
							</div>
							<div class="form-group">
								<input type="SUBMIT" class="btn btn-block btn-round btn-b" name="rbtn">
							</div>
						</form>
						<?php
							if(isset($_REQUEST["rbtn"]))
							{
								$oldp=$_REQUEST["op"];
								$np=$_REQUEST["password"];
								$rnp=$_REQUEST["re-password"];
                                                                if($oldp==$_SESSION["pas1"])
                                                                {
                                                                        if($oldp==$np)
                                                                        {
                                                                                echo '<script>alert("Try a new password !")</script>';
                                                                                
                                                                        }	
                                                                        else
                                                                        {	
                                                                                if($np==$rnp)
                                                                                {
                                                                                        $qry= "UPDATE titan SET password='$np' where email='".$_SESSION["email"]."'";
                                                                                        include("db.php");
                                                                                        if(mysqli_query($conn,$qry))
                                                                                        {
                                                                                                echo '<script>alert("Password Updated Successfully !")</script>';
                                                                                                $_SESSION["pas1"]=$np;
                                                                                        }
                                                                                        else{
                                                                                                echo '<script>alert("Password Update Failed !")</script>';
                                                                                        }
                                                                                }							
                                                                        }
                                                                }
                                                                else
                                                                {
                                                                         echo '<script>alert("Old Password is not Correct !")</script>';
                                                                }
							}
						?>
						
	
					
					</div>
				</div>
			</div>
		</section>
	
	
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