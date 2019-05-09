<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4 - Code Cohabitation";
	$file = "lab4codecohabitation.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which act as a Code Cohabitation pag.";
	$date = "June 15, 2018";
	$banner = "Lab 4:PHP Code Cohabitation.";
	include("./header.php");
?>
<h2>
				PHP Code Cohabitation
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a>
			</p>
			<p>
				This page Describe the PHP code With HTML tags.
			</p>
			<h3>Text Code Example</h3>
			
				<b>1.Write HTML tag to open.</b>
				&lt;HTML&gt; <br/>
				&lt;HEAD&gt; <br/>
				&lt;TITLE&gt;My First PHP Script&lt;/TITLE&gt;<br/>
				&lt;/HEAD&gt; <br/>
				&lt;BODY&gt; <br/>
				

				<b>2.Write PHP</b>
				&lt;? <br/>
				echo "&lt;P&gt;&lt;em&gt;Hello World! I'm using PHP!.&lt;/em&gt;&lt;/P&gt;";<br/>
				?&gt;

				<b>3.WRITE HTML tag to close.</b>
				&lt;/BODY&gt; <br/>
				&lt;/HTML&gt; <br/>
			
<?php

include("./footer.php");

?>