<?php
/*
Rahulkumar Patel
22-June-2018
WEBD2201
*/
	$title = "Lab 5 Remote Adderess";
	$file = "lan5remoteaddress.php";
	$desc= "Lab 5 page for my WEBD2201 Website, which describe the remote address of PHP";
	$date = "June 22, 2018";
	$banner = "Lab 5: PHP Remote Address.";
	include("./header.php");
?>
     <p>
    	<b>Click here to go Lab 5 Main page: </b><a href="./lab5.php">Lab 5: PHP Example from textbook.</a> <br />
    </p>
    <hr/>
    <p><b>Description</b></p>
	<p>This page shows the remote ip address of user's machine.For this I c used the predefine-code "getenv("REMOTE_ADDR")" 
			to get address and I used variable to store it,SO I can use it to print.
    </p>
	<hr/>
	<p><b>Code for this is</b></p>
	<p>
	&lt;?php<br/>
	$address = getenv("REMOTE_ADDR");<br/>
	echo "Your IP address is $address.";<br/>
	?&gt;
	</p>
	<hr/>
	<p><b>Output</b></p>
	<?php
	$address = getenv("REMOTE_ADDR");
	echo "Your IP address is $address.";
	?>

<?php
include("./footer.php");
?>