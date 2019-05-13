<?php
include 'realestatedbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Realestate Project</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/custom.css"/> 


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
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">

						</div>
	
						</div> 
					</div>
				</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<div class="nav-switch">					
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.php">Home</a></li>
					        <li><a href="contact.php">Contact</a></li> 
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<!-- Hero section -->
	<section class="hero-image">
		<div class="container hero-text text-white">
			<h2>Find your home not just a house </h2> 
			 <p>Search real estate property's in your local area</p> 
		 </div>
	</section> 
	<!-- Hero section end -->
<!------------------- loop featured properties ------------------->	
	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Featured Listings</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			<div class="row">

<?php 
$sqlsr = "SELECT * FROM `lrodgers_salerep`";
//echo '<hr> test sql statment...' .$sql. '<br>';
$resultsr = mysqli_query($conn, $sqlsr);
if (mysqli_num_rows($resultsr) > 0) {
    // output data of each row
   $rowsr = mysqli_fetch_assoc($resultsr);   
}


$sql = "SELECT * FROM `lrodgers_property` WHERE `featured` = 1 AND `active` =1 ";
//echo '<hr> test sql statment...' .$sql. '<br>';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {   ?>


				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="<?php echo $row['image'];?>

							">  
							<div class="rent-notic"><?php echo $row['status'];?></div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5><?php echo $row['address'];?></h5>
								<p><i class="fa fa-map-marker"></i> <?php echo $row['city'];?> <?php echo $row['state'];?> <?php echo $row['postcode'];?></p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-bed"></i><?php echo $row['bedrooms'];?> Bedrooms </p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> <?php echo $row['garages'];?> Garages </p>
										<p><i class="fa fa-bath"></i> <?php echo $row['barthrooms'];?> Bathrooms </p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i><?php echo $rowsr['frist_name'];?> <?php echo $rowsr['last_name'];?></p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price"><?php echo $row['price'];?> </a>
						</div>
					</div>
				</div>

<?php } }else {echo "No properties found <br>"; } ?>

		    </div>
		</div> 
</section>	
<!------------------- loop featured properties end ------------------->	

	<div class="container">
				<div class="section-title text-center">
					<h3>OUR AGENTS</h3>
					<p>Our directory of real estate agents who can help you</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/allison_small.jpg" alt="person">
								<div class="member-social">
									<a href="https://www.facebook.com/firstnationalgrafton/"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/graftonrealestate/"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Allison Whaites</h5>
								<span>Real Estate  Agent and Property Management</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>P 02 6642 8554</p>
									<p><i class="fa fa-phone"></i>M 0487 289 471</p>
									<p><i class="fa fa-envelope"></i>allison@fngrafton.com.au</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 about-text-left">
					<h5>ABOUT Allison Whaites</h5>
					<br>
					<p class="about-agent">Allison is a local Licensed Real Estate Professional, who specialises in office management, Property Sales, both residential and rural, property management and Fair Trading compliance. With many years experience in the local Grafton market and also out of area, allows her to have a well-rounded picture of all facets of the local and national real estate industry. <br>
					Being a long time Grafton local and having raised her children in the area, Allison enjoys being part of the wider community by fundraising, being involved in charity events, supporting local businesses via social media and hosting free real estate information sessions. She loves the industry's dynamic nature and is determined to excel and reach her real estate goals. <br>
					Allison also enjoys interacting with people, with clients valuing her friendly and supportive nature as well as her drive to deliver the best results possible.</p>
				</div>
		</div>
</div>

<div id="loginpopupbox" class="loginpopup">
  <form class="loginpopup-content animate" action="realestatadmin.php" method="post">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="login" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button class="loginbtn" name="loginsubmit" type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('loginpopupbox').style.display='none'" class="cancelbtn">Cancel</button>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
</div>
<!----------------------------------------------------------------------------------------- Footer section -------------------------------------------------------------->	
	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footerbg.png">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="social">
						<h5 class="fw-title">Follow US</h5>
						<a href="https://www.facebook.com/firstnationalgrafton/"><i class="fa fa-facebook"></i></a> 
						<a href="https://www.instagram.com/graftonrealestate/"><i class="fa fa-instagram"></i></a>
						
					</div> 
<!----------------------------------------------------------------------------------------- social media links end -------------------------------------------------------------->	
				</div>
				
<!----------------------------------------------------------------------------------------- contact infromation -------------------------------------------------------------->	
            <div class="col-lg-3 col-md-6 footer-widget">	
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>109 Pound Street, Grafton </p>
						<p><i class="fa fa-phone"></i>P 02 6642 8554</p>
						<p><i class="fa fa-phone"></i>M 0487 289 471</p>
						<p><i class="fa fa-envelope"></i>allison@fngrafton.com.au</p>
						<p><i class="fa fa-clock-o"></i>Mon - Fri, 08 AM - 06 PM <Br> Sat,  08 AM - 12 PM</p>
					</div>
				</div> 
</div>

<!----------------------------------------------------------------------------------------- bottom page links -------------------------------------------------------------->				
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">Contact</a></li> 
						<button onclick="document.getElementById('loginpopupbox').style.display='block'" style="width:auto;">Login</button> 
					</ul>
				</div>
<!----------------------------------------------------------------------------------------- bottom page links end -------------------------------------------------------------->	



<!----------------------------------------------------------------------------------------- copyright  -------------------------------------------------------------->	
				<div class="copyright">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
<!----------------------------------------------------------------------------------------- copyright end -------------------------------------------------------------->	
	</footer>
	<!-- Footer section end -->
 <!----------------------------------------------------------------------------------------- Footer section end -------------------------------------------------------------->	    



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/javascript.js"></script>


</body>
</html>