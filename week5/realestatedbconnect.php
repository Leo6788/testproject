<?php         // Infroamtion that is needed to connect to a database 

$servername = "db730114064.db.1and1.com";
$username = "dbo730114064";
$password = "AdvancedWebSandPit2020";
$dbname = "db730114064";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname );

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
session_start();
?>
