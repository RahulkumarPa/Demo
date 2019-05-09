<?php 
  
 include("./header.php");	
 unset($_SESSION);
 session_destroy();

 
$message .= "You have successfully logged out! ";
header('location: login.php?status=loggedout');
session_start();
?>
<?php include'footer.php';?>

 