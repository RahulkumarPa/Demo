<?php 	/*
	Gary Baker, Heth Patel, & Rahulkumar Patel
	WEBD3201
	Sept. 13th, 2018
	*/ 
	require_once("./includes/constants.php");
	require_once("./includes/db.php");
	require_once("./includes/functions.php");
	ob_start(); 
	session_start();

	$message = "";
	if(isset($_SESSION['message']))
	{
		$message = $_SESSION['message'];
		unset($_SESSION['message']);
	}
?>
 
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="./css/webd3201.css" /> 
   <!--
    Author: Gary Baker, Heth Patel ,& Rahulkumar Patel
    Filename: header.php
    Date: Sept. 13th, 2018
    Description: This is the header for our real estate website. It will allow the user to navigate through several web pages.
    -->
    <title>WEBD2201 -<?php echo $title; ?></title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
    <!--
        Name:   Gary Baker, Heth Patel, & Rahulkumar Patel
        File:   <?php echo $file . "\n"; ?>
        Date    <?php echo $date . "\n"; ?>
        Description: <?php echo $description . "\n"; ?>
    -->

    </head>

    
<body id="body">
<div id="header">
    <div id="title">
        <img src="./images/webd3201-logo.png" class ="img1" alt="Sorry Image is Unavailable" />
        
        <h1>
            Homes For You
        </h1>
        
        
    </div>
    <div id="horizontal-tabs">
        
            <a href="./index.php">Home</a>

            <a href="./listing-search.php">Listing Search</a>
            <a href="./listing-create.php">Create Listing</a>
            <a href="./about_us.php">About Us</a>
          
            <?php if(isset($_SESSION['user']['users_type']) == AGENT) { ?>
            
            <a href="./disabled-users.php">Disabled Users</a>
            
            <?php } ?>
    </div>    
	<div id="loginregister">
    	<?php
	 if(!isset($_SESSION['user'])){
	?> 
        
            <a href="./register.php">Register Now!</a>
            <a href="./login.php">Log In</a>
    
	<?php }else{ ?>

            <a href="./user-password.php">Update Now!</a>
            <a href="./logout.php">Log Out</a>
            <a href="./changepassword.php">Change Password</a>
             <a href ="./listing-city-select.php">listing-city-selected</a>
 
	<?php } ?>

    </div>    
 

</div>


