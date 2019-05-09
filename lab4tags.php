<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4";
	$file = "lab4.php";
	$desc = "Lab 4 page for my WEBD2201 Website,which contain start and end tag example.";
	$date = "June 15, 2018";
	$banner = "Lab 4 - PHP Start and End tags";
	include("./header.php");
?>
     			<h2>
				PHP Start and End Tags
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a>
			</p>
			<p>
				This page will illustrate the three (3) different ways you can embed PHP code into your web pages
			</p>
		
				<table width="500" border="1">
					<caption>Table 4.1: Basic PHP Start and End Tags</caption>
					<tbody>
					<tr>
					<th style="width:50">Method</th>
					<th style="width:50">Opening Tag</th>
					<th style="width:50">Closing Tag</th>
					</tr>
					<tr>
					<td>1</td>
					<td>&lt;?php</td>
					<td>?&gt;</td>
					</tr>
					<tr>
					<td>2</td>
					<td>&lt;?</td>
					<td>?&gt;</td>
					</tr>
					<tr>
					<td>3</td>
					<td>&lt;script  language="php"&gt;</td>
					<td>&lt;/script&gt;</td>
					</tr>
					</tbody></table>
			
			<h3>Text Code Example</h3>
				<b>This is First Type Text code Example</b><br/>
				&lt;\?php <br/>
				echo "&lt;P&gt;This is a First type tag Code example.&lt;/P&gt;";<br/>
				?&gt;<br/>

				<b>This is second Type Text code Example</b><br/>
				&lt;? <br/>
				echo "&lt;P&gt;This is a Second type tag Code example.&lt;/P&gt;";<br/>
				?&gt;<br/>

				<b>This is First Type Text code Example</b><br/>
				&lt;script language = "php"&gt;<br/>
				echo "&lt;P&gt;This is a Third type tag Code example.&lt;/P&gt;";<br/>
				&lt;/script&gt;<br/>

			
<?php

include("./footer.php");

?>