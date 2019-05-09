<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4 - Escaping Code";
	$file = "lab4escapingyourcode.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which act as a Code escaping pag.";
	$date = "June 15, 2018";
	$banner = "Lab 4:PHP Escaping Code.";
	include("./header.php");
?>
<h2>
				PHP Escaping Your Code
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a>
			</p>
			<p>
				This Chapter Describe the escaping your code.
			</p>
			<h3>Text Code Example</h3>
			<p>For successful run code we have to end code line with semicolon(;) same as you can not insert the quotion mark inside the php quotation.so for that you have to use escape(\).The Example is shown below. </p>
			
				<b>1.Write HTML tag to open.</b>
				&lt;HTML&gt; <br/>
				&lt;HEAD&gt; <br/>
				&lt;TITLE&gt;Trying For Another Error&lt;/TITLE&gt;<br/>
				&lt;/HEAD&gt; <br/>
				&lt;BODY&gt; <br/>
				

				<b>2.Write PHP</b>
				&lt;? <br/>
				echo "&lt;P&gt;I think this is really "cool"!&lt;/P&gt;";<br/>
				?&gt;

				<b>3.WRITE HTML tag to close.</b>
				&lt;/BODY&gt; <br/>
				&lt;/HTML&gt; <br/>
			
			 <b>Noticable</b>
			 Here ("") gives the error for solve it  we have to add code like<br/> 
			&lt;? <br/>
				echo "&lt;P&gt;I think this is really \"cool\"!&lt;/P&gt;";<br/>
				?&gt;


<?php

include("./footer.php");

?>