<?php
/*
Rahulkumar Patel
22-June-2018
WEBD2201
*/
	$title = "Lab 5 Calculate";
	$file = "lan5calculate.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which calculate user input  from lab5calculate_form ";
	$date = "June 22, 2018";
	$banner = "Lab 5: Calculate.";
	include("./header.php");
?>
     <p>
    	<b>Click here to go Lab 5 Main page: </b><a href="./lab5.php">Lab 5: PHP Example from textbook.</a> <br />
    	<b>Click here to go Lab5calculate_form: </b><a href="./lab5calculate_form.php">Lab5calculate_form: PHP Example from textbook.</a> 
	 </p>
	 <hr/>
	 <?php

		if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] =="")) 
		{
    
		}
		if ($_POST['calc'] == "Add") 
		{
	     $result = $_POST['val1'] + $_POST['val2'];

		}
		 else if ($_POST['calc'] == "Subtract")
		  {
		    $result = $_POST['val1'] - $_POST['val2'];
		  }
		  else if ($_POST['calc'] == "Multiply") 
		  {
		    $result = $_POST['val1'] * $_POST['val2'];
		  } 
		  else if ($_POST['calc'] == "Divide") 
		  {
		    $result = $_POST['val1'] / $_POST['val2'];
	      }
	 ?>	
	 <p><b>RESULT:</b></p>
		<P>The result For <?php echo $_POST['val1'];?> <?php echo $_POST['calc'];?> <?php echo $_POST['val2'];?> is: <?php echo $result; ?></p>

<?php
include("./footer.php");
?>