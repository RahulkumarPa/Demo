<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4 - PHP Constants";
	$file = "lab4usingconstant.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which display cnstant in PHP.";
	$date = "June 15, 2018";
	$banner = "Lab 4:PHP Constants.";
	include("./header.php");
?>

<h2>
				Using Constants
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a>
			</p>

			<p>The constant is user define variable which alrady initialize by user before the code run.And The value of constane never change during code excution,It may same during whole excution of code.Genrally, Constant name define in uppercases</p>
			<p><b>Code Example</b></p>
			
				<b>Start of PHP code</b><br/>
				&lt;?<br/>
				<b>Define the constant</b><br/>
				define("MYCONSTANT" , "This is the value of constant 'MYCONSTANT'.");<br/>
				Here,"MYCONSTANT" is a constant name and the value of it is "This is the value of 'MYCONSTANY'.".<br/>
				And always Constant declear with the Define keyword.<br/>
				<b>Print the Constant value</b>br/>
				echo MYCONSTANT;br/>
			
<?php

include("./footer.php");

?>