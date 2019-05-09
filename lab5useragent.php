<?php
/*
Rahulkumar Patel
22-June-2018
WEBD2201
*/
	$title = "Lab 5 User Agent";
	$file = "lan5useragent.php";
	$desc= "Lab 5 page for my WEBD2201 Website, which describe the user agent of PHP";
	$date = "June 22, 2018";
	$banner = "Lab 5: PHP User Agent.";
	include("./header.php");
?>
    <p>
    	<b>Click here to go Lab 5 Main page: </b><a href="./lab5.php">Lab 5: PHP Example from textbook.</a> <br />
    </p>
    <hr/>
    <p><b>This page display the PHP user agent.For this I used pre-defind code,which is "getenv("HTTP_USER_AGENT")" method and stored it in one variable.And then I used echo command to print it. </b>
    </p>
	<hr/>
		<p><b>Code</b></p>
		<p>
		&lt;?php<br/>
		$agent = getenv("HTTP_USER_AGENT");<br/>
		echo " You are using $agent.";<br/>
		?&gt;
		</p>
		<hr/>
		<p><b>Output</b></p>
		<?php
		$agent = getenv("HTTP_USER_AGENT");
		echo " You are using $agent.";
		?>

<?php
include("./footer.php");
?>