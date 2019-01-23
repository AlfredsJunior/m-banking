<?php
// This function will run within each post array including multi-dimensional arrays
function ExtendedAddslash(&$params)
{
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
            unset($var);
        }
}

// Initialize ExtendedAddslash() function for every $_POST variable
ExtendedAddslash($_POST);     
$fname = $_POST['fname'];
$lname =$_POST['lname'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$pin =$_POST['pass'];
$pin_confirm =$_POST['confirm_pass'];
//confirming if the password matches
if($pin != $pin_confirm)
	{
         echo "Pins doesn't match";
         return 0;

     }


/*
		$secret = password_hash($pin, PASSWORD_BCRYPT);
		$confirm_secret = password_hash($pin_confirm, PASSWORD_BCRYPT);
		*/
		//Store in database
		$servername = "localhost";
		$database = "m_banking";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);
		// Check connection
		if ($conn->connect_error)
	  {
		die("Connection failed: " . $conn->connect_error);
	   }

					$sql = "INSERT INTO Users (FirstName, LastName, Phone, Email, Pin, ConfirmPin)

					VALUES

					('$_POST[fname]','$_POST[lname]', '$_POST[phone]','$_POST[email]', '$_POST[pass]','$_POST[confirm_pass]')";

						
								$query  = "SELECT Account_Number FROM users";
								$result = $conn->query($query);						
									$row = $result->fetch_assoc();
									echo "Your Account number is <br>";
									echo $row["Account_Number"];
								    // output data of each row
								   echo("<a href='../login/login.html'>Click to log In</a>")
								    
								 
								 
//		$conn->close();
							


?>









