<?php
include 'realestatedbconnect.php';
?>

<?php

if (isset($_POST['submit'])) {
   $fristname = $_POST['fristname'];
   $lastname = $_POST['lastname'];
   $phonenumber = $_POST['phonenumber'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $subject = $_POST['subject'];
   $quiz = $_POST['quiz'];

   if ($quiz == "bart") {
   $mailto = "liam.rodgers6@tafensw.net.au";
   $headers = "From: ".$email;
   $txt = "you have received an email from ".$fristname. "." .$lastname.".\n\n".$message;
   mail($mailto, $subject, $txt, $headers);
   header("location: contact.php");
   } 
   else {
   echo "Try Again <br>";
   echo "<a href='javascript:;' onclick='history.back()'>Try Again</a>"; 
   }
}
   

$thedate = date("l jS \of F Y h:i:s A");

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO lrodgers_contact (fname, lname, phone, email, subject, message, contactdate, reply)
 VALUES ('" .$fristname. "', '" .$lastname. "', '" . $phonenumber. "', '" .$email. "', '" .$subject. "','" .$message. "','" .$thedate. "', 0)";

//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 
?>