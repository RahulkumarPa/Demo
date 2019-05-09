<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4 - PHP Constants2";
	$file = "lab4usingconstant2.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which display cnstant in PHP.";
	$date = "June 15, 2018";
	$banner = "Lab 4:PHP Constants2.";
	include("./header.php");
?>
 
 <h2>
				Using Constants 2
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a>
			</p>
			</p>

			<p>PHP has some predefined constants.And those are.</p>
			
				<b>1._FILE_</b><br/>
				It's display the file pasing loction as a string value type.Code Example:<br/>
				echo "This file is "._FILE_;<br/>
				Above code show the file parsing location.<br/>
				
				<b>2._LINE_</b><br/>
				It's display the which line you are.Code Example:<br/>
				eacho "This is line number "._LINE_;<br/>
				Above code diaplay the line where code parsed.<br/>

				<b>3.PHP_VERSION</b><br/>
				It's display the version of PHP.Code Example:<br/>
				eacho "I am using ".PHP_VERSION;<br/>
				Above code diaplay the version of PHP.<br/>

				<b>4.PHP_OS</b><br/>
				It's display the Operating System where the PHP is running.Code Example:<br/>
				eacho "This test is being run on ".PHP_OS;<br/>
				Above code diaplay the OS where PHP is running.<br/>


			
<?php

include("./footer.php");

?>