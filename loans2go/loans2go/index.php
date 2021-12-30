<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Shri Ayyappa Swami Annadan Seva Sangham Solapur</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="index.php" class="site-logo">
			<h2><font color="white">Shri.AASS</font></h2>
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="#">About</a>
					<ul class="sub-menu">
						<li><a href="sanstha.php">Sanstha</a></li>
						<li><a href="board.php">Board</a></li>	
					</ul>
				</li>
				<li><a href="gallery.php" class="active">Gallery</a></li>
				<li><a href="#">Activities</a>
					<ul class="sub-menu">
						<li><a href="social.php">Social</a></li>
						<li><a href="devotional.php">Devotional</a></li>	
					</ul>
			</ul>
			<!--<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Call us now! </a>
				<div class="hr-btn hr-btn-2">+45 332 65767 42</div>
			</div>-->
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="">
						<h2><font color="orange">Shri Ayyappa Swami Annadan Seva Sangham Solapur</font></h2>
						<p></p>
					</div>
				</div>
				
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
			<!--<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>-->
			<?php
			include("pro_con.php");
			$s="select * from gallery";
			$r=mysqli_query($mycon,$s);
			while($res=mysqli_fetch_array($r))
			{
				echo "<div class='hs-item set-bg' data-setbg='$res[1]'></div>";
			}
			
			?>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- CTA Section end -->
	<section class="cta-section set-bg" data-setbg="">
		<div class="container">
			<h2> <strong>Shri Ayyappa Swami Annadan Seva Sangham || Solapur ||</strong> </h2><br><br>
			<a class="site-btn sb-dark sb-big" href="info.php">Lord Ayyappa </a>
			<a class="site-btn sb-dark sb-big" href="diksha.php">Ayyappa Diksha </a><br><br>
			<a class="site-btn sb-dark sb-big" href="dd.php">DO and DONT's in Ayyappa</a>
			<a class="site-btn sb-dark sb-big" href="padinetam.php">padinetambadi (18 steps) </a>
			<a class="site-btn sb-dark sb-big" href="stos.php">How to reach solapur to shabarimala </a>
		</div>
	</section>
	<!-- CTA Section end -->

	<!-- Why Section end -->
	
			<div class="text-center mb-5 pb-4">
				<h2>---------</h2>
			</div>
			
			<?php
				$s="select * from gallery";
				$r=mysqli_query($mycon,$s);
				echo "<marquee direction='left'>";
				while($res=mysqli_fetch_array($r))
				{
					echo "<img src=$res[1] height='300' width='400'></img>";
				}
				echo "</marquee>";
				?>
				<!--<a href="#" class="site-btn sb-big">Apply Now!</a>-->
		
	<!-- Why Section end -->


	<!-- Feature Section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="feature-item">
				<div class="row">
				<?php
					$s="select * from more where Title='Solapur Ayyappa Temple'";
					$r=mysqli_query($mycon,$s);
					while($res=mysqli_fetch_array($r))
					{
					echo "<div class='col-lg-6'>
						<img src='$res[4]' width='300' height='200'>
					</div>
					<div class='col-lg-6'>
						<div class='feature-text'>";
					echo "<h2>$res[1]</h2>
							$res[2]<br><br>
							<a href='solapur_ayyappa_temple.php' class='readmore'>read more <img src='img/arrow.png'></a>
						</div>
					</div>";
					}
					?>
				</div>
			</div>
			<div class="feature-item">
				<div class="row">
				<?php
				$s="select * from more where Title='Siddheshwar Temple'";
					$r=mysqli_query($mycon,$s);
					while($res=mysqli_fetch_array($r))
					{
				echo "<div class='col-lg-6 order-lg-2'>
						<img src='$res[4]' width='300' height='200'>
					</div>";
				echo "<div class='col-lg-6 order-lg-1'>
						<div class='feature-text'>
							<h2>$res[1]</h2>
							$res[2]
							<br><br>
							<a href='siddheshwar_temple.php' class='readmore'>read more <img src='img/arrow.png' alt=''></a>
						</div>
					</div>";
					}
					?>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Feature Section end -->
	
	<!-- Footer Section -->
	<br><br>
	<footer class="footer-section">
		<div class="container">
			<a href="index.html" class="footer-logo">
				<h2><font color="white">Shri.</font><strong><font color="orange">AASS<strong></font></h2>
			</a>
			
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
