<?php

		$servername = "localhost";
		$database = "m_banking";
		$username = "root";
		$password = "";

//Connect to server and select databse.
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
		// Check connection
		if ($conn->connect_error)
	  {
		die("Connection failed: " . $conn->connect_error);
	   }


// value sent from form
$amount_withdraw=$_POST['amount_withdraw'];
$pass=$_POST['pass'];
$account_number=$_POST['account_number'];


// retrieve pin from table where account_number = $account_number
$sql="SELECT Balance_Amount FROM transaction WHERE Account_Number='$account_number'";
$query=mysqli_query($conn, $sql);
$result=mysqli_fetch_row($query);
$val=$_POST['amount_withdraw'];
$new_val=$result-$val;
mysqli_query($conn "UPDATE transaction SET account_balance = '$new_val' WHERE Account_Number='$account_number'");

header("Location: ../m-banking-services/m_banking_service.html");

?>