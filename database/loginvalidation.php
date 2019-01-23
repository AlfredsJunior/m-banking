<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="m_banking"; // Database name 



// Connect to server and select databse.
 $conn = mysqli_connect("$host", "$username", "$password", "$db_name"); 
 // Check connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
 

// Define $account_number and $pass 
$account_number= $_POST['account_number'];
$pass= $_POST['pass'];

// To protect MySQL injection
$account_number = stripslashes($account_number);
$pass = stripslashes($pass);

	$account_number = mysqli_real_escape_string($conn, $_POST['account_number']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']); 
$sql = "SELECT * FROM users WHERE Account_Number='$account_number' and Pin='$pass'";
$result = mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows( $result);
// If result matched $account and $pass, table row must be 1 row

if ($count==1){
// Register $account_number, $pass and redirect to file "m_banking_services.html"
	/*
session_register("Account_Number");
session_register("Pin"); 
header("location:");*/
echo "<a href='../m-banking-services/m_banking_service.html'>Welcome to M-Banking</a>";
}
else {
echo " Wrong Credentials";
header("login.html");
}

mysqli_close($conn);
?>