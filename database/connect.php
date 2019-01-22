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
$FisrtName = $_POST['fname'];
$LastName =$_POST['lname'];
$Phone =$_POST['phone'];
$Email =$_POST['email'];
$Pin =$_POST['pin'];
$Confirm_Pin =$_POST['confirm_pin'];
/*
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'm_banking'; */


$servername = "localhost";
$database = "m_banking";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 

$sq l= "INSERT INTO Users (First_Name, Last_Name, Phone, Email,Pin, Confirm_Pin)

VALUES

('$_POST[fname]','$_POST[lname]', '$_POST[phone]','$_POST[email]', '$_POST[pin]','$_POST[confirm_pin]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "added successfully";

 

mysql_close($con)

?>



<?php




/*
mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name);

// search submission ID
//can be used to log in

$query = "SELECT * FROM `table_name` WHERE `submission_id` = '$submission_id'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

if ($resultcount > 0) {
 
    mysql_query("UPDATE `table_name` SET
                                `name` = '$name',
                                `email` = '$email',
                                `phone` = '$phonenumber',
                                `subject` = '$subject',
                                `message` = '$message'       
                             WHERE `submission_id` = '$submission_id'")
     or die(mysql_error());
   
} else {

    mysql_query("INSERT INTO `table_name` (submission_id, formID, IP,
                                                                          name, email, phone, subject, message)
                               VALUES ('$submission_id', '$formID', '$ip',
                                                 '$name', '$email', '$phonenumber', '$subject', '$message') ")
    or die(mysql_error()); 

} */
?>  ?>