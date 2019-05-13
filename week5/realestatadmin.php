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
	<div class="navad">
		           <ul>
					   <li><a href="index.php">Home</a></li>
					   <li><a href="contact.php">Contact</a></li> 
						</ul>
				</div>
    
    <div class="titlead">
      <h2> Administration </h2>
    </div>
<?php 
//echo 'session is now - '.$_SESSION['validuser'].'<br>';   
$shownext=''; 
include 'processlogin.php';
if ($shownext == 'adminfeatures'){
?>

    <div class="dropdownad">
  <button class="dropbtnad">Admin Features Drop Down Box</button>
  <div class="dropdown-contentad">
  <a href="realestatadmin.php?content=emails">Admin Email</a>
 <!--  <a href="realestatadmin.php?content=properties">Admin property</a> -->
 <!-- <a href="realestatadmin.php?content=users">Admin Users</a> -->
  </div>
</div>	

<!------------------- email from database featured properties ------------------->	
	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Email's</h3>
			</div>
			 <div class="row">
				<div class="col-12">	
				<?php 
				$sql = "SELECT * FROM lrodgers_contact";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
 			   // output data of each row
				?>
				<table class="tablead">
				<tr class="topsection"><td>First Name</td><td>Last Name</td><td>Phone</td><td>Email</td><td>Subject</td><td>Contact Date</td><td>Reply</td></tr>
				<?php	
    			while($row = mysqli_fetch_assoc($result)) {
        			echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["email"]. "</td><td>" . $row["subject"]. "</td><td>" . $row["contactdate"]. "</td><td>" . $row["reply"]. "</td></tr>";
    			}
				} else {
    			echo "0 results";
				}
				mysqli_close($conn);
			    ?>
				<tr>
				<!-- <td colspan="8"><a href="contactadd.php">Add Contact</a> </td></tr> -->
				</table>
				</div>
		    </div> 
		</div>    
</section>
<?php } ?>
<!----------------------------------------------------------------------------------------- Footer section -------------------------------------------------------------->	
	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footerbg.png">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">	
					<div class="social">
						<h5 class="fw-title">Follow US</h5>
						<a href="https://www.facebook.com/firstnationalgrafton/"><i class="fa fa-facebook"></i></a>
						<!-- <a href="#"><i class="fa fa-twitter"></i></a> --> 
						<a href="https://www.instagram.com/graftonrealestate/"><i class="fa fa-instagram"></i></a>
						<!-- <a href="#"><i class="fa fa-pinterest"></i></a> -->
						<!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
					</div> 
				</div>
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
						<!-- <li><a href="">Featured Listing</a></li> -->
						<!-- <li><a href="">About us</a></li> -->
						<!-- <li><a href="">Pages</a></li> -->
						<!-- <li><a href="">Blog</a></li> -->
						<li><a href="contact.php">Contact</a></li>  
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
</body>
</html>