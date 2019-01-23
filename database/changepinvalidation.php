<?php
session_start();
$account_number = $_SESSION['account_number'];
$old_pin = $_POST['OLD_Pin'];
$new_pin = $_POST['New_Pin'];
$confirm_new_pin = $_REQUEST['Confirm_New_Pin'];

//Store in database
		$servername = "localhost";
		$database = "m_banking";
		$username = "root";
		$password = "";
		$conn = new mysqli($servername, $username, $password, $database);
$sql = mysqli_query($conn, "SELECT Pin, 
                                  FROM pin WHERE Account_Number ='".$account_number."'");
while($row = mysqli_fetch_array($sql)){ $salt = $row['salt'];
$pin = $pin;
$hash = md5($salt . $pin);

mysqli_query($connection, "UPDATE pin SET Pin = '".$hash."' WHERE Account_Number='".$account_number."'");
echo "Pin Changed Successfully";
echo "<a href='../login/login.html'>Log in</a>";
}
?>