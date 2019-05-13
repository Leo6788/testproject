<?php 
if (isset($_REQUEST['loginsubmit'])){  // user is trying to login 
	
	$login = $_REQUEST['login'];
	$password = $_REQUEST['password'];

	$sql = "SELECT * FROM `lrodgers_salerep` WHERE `username` = '$login' AND `password` = '$password'";
	//echo " SQL is now $sql <hr>"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    
		while($row = mysqli_fetch_assoc($result)) {
			//echo 'login on <br> welcome back eddddddddddd';
			$_SESSION['validuser'] = $row['frist_name'];
			$shownext = 'adminfeatures'; 


		}

	}else {
		echo '<h4>Username or Login incorrect </h3>'; 
		$shownext = 'loginform';
	}
}
else if (isset($_SESSION['validuser'])){ // user already logged in so show admin stuff 
//echo "user logged in  - show admin stuff "; 
$shownext = 'adminfeatures'; 


} else {
		echo 'Please login to see content <br>';
		$shownext = 'loginform'; 
}


if ($shownext == 'loginform'){

	echo '		<form class="loginpopup-content animate" action="realestatadmin.php" method="post">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="login" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button class="loginbtn" name="loginsubmit" type="submit">Login</button>
    </div>
  </form>	';

} 
?>