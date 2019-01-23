<?php 
 
 session_start();
 $account_number = $_SESSION['account_number']; //retrieve the session variable
 
 unset($_SESSION['account_number']); //to remove session variable
 session_destroy(); //destroy the session
 header("location: LoginForm.php"); //to redirect back to "Login.php" after logging out
 exit();
 
 if(!isset($_SESSION['account_number'])) //If user is not logged in then he cannot access the profile page
 {
 //echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
 header("M-Banking");
 }