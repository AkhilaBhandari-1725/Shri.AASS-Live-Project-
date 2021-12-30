<?php
include("pro_con.php");
if(isset($_POST["b1"]))
{
	$a=$_POST["t1"];
	$b=$_POST["t2"];
	$c=$_POST["t3"];
	$d=$_POST["t4"];
	
	$s="insert into contact(Name,Email,Subject,Message) values('$a','$b','$c','$d')";
	
	$res=mysqli_query($mycon,$s);
	if($res)
	{
		echo "<script>alert('Feedback Sent Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Feedback Cannot be Sent Successfully')</script>";
	}
}
?>
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
		<a href="index.html" class="site-logo">
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
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Page top Section end -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<h2>Contact</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">Contact</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section end -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Shri Ayyappa Swami Annadan Seva Sangham</h2>
						<p> --------------</p>
						
					</div>
				</div>
				<div class="col-lg-8">
					<form class="contact-form" method="post">
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="t1" name="t1" placeholder="Your Name">
							</div>
							<div class="col-md-6">
								<input type="text" id="t2" name="t2" placeholder="Your E-mail">
							</div>
							<div class="col-md-12">
								<input type="text" id="t3" name="t3" placeholder="Subject">
								<textarea id="t4" name="t4" placeholder="Your Message"></textarea>
								<button id="b1" name="b1" class="site-btn">send message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" style="border:0" allowfullscreen></iframe>
			</div>-->
		</div>
	</section>
	<!-- Contact Section end -->

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
