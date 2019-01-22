<?php 

$servername = "localhost";
$database = "m_banking";
$username = "root";
$password = "";


$Pin =$_POST['pin'];
$AccountNumber =$_POST['account_number']

mysql_connect("Server", "root", "Gen") or die("Couldn't select database.");
mysql_select_db("generator") or die("Couldn't select database.");

$account_number = $_POST['acount_number'];
$pin = $_POST['pin'];

$sql = "SELECT * FROM users WHERE account_number = '$account_number' AND pin = '$pin' ";
$result = mysql_query($sql) or die(mysql_error());
$numrows = mysql_num_rows($result);
if($numrows > 0)
   {
   	<
    echo '../m-banking-services.m_banking.html';
   }
else
   {
    echo "Your Credentials aren't correct";
   }
   ?>