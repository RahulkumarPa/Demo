<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4 - Logical Operators";
	$file = "lab4logicaloperators.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which act as a Logical Operators pag.";
	$date = "June 15, 2018";
	$banner = "Lab 4:PHP Logical Operators.";
	include("./header.php");
?>

<h2>
				Logical Operators
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a>
			</p>

		<p>]PHP have two logical operators,And those are &amp;&amp;(and) and || (or).</p>

		
	<p><b>Logical Operator code Example.</b></p><br/>

			&lt;HTML&gt;<br/>
			&lt;HEAD&gt;<br/>
			&lt;TITLE&gt;Using Logical Operators&lt;TITLE&gt;<br/>
			&lt;/HEAD&gt;<br/>
			&lt;BODY&gt;<br/><br/>

				&lt;?php<br/>
				$degrees = "95";<br/>
				$hot = "yes";<br/><br/>
				


				if (($degrees &gt; 100) || ($hot == "yes")) {<br/>
				echo "TEST 1: It's &lt;strong&gt;really&lt;/strong&gt; hot!";<br/>
				} else {<br/>
				echo "TEST 1:It's bearable.";<br/>
				}<br/><br/>

				

				if (($degrees &lt; 80) &amp;&amp; ($hot == "yes")) {<br/>
				echo "TEST 2: It's &lt;strong&gt;really&lt;/strong&gt; hot!";<br/>
				} else {<br/>
				echo "TEST 2: It's bearable.";<br/>
				}<br/><br/>

				?&gt;
				&lt;/BODY&gt;<br/>
				&lt;/HTML&gt;<br/><br/>

		<br/><p><b>Output:</b></p>
		TEST 1:It's <strong>really</strong> hot!<br/>
		TEST 2:It's  bearable!

<?php

include("./footer.php");

?>