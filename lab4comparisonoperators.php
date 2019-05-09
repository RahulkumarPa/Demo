<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4 - Comprasion Operators";
	$file = "lab4comparisonoperators.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which act as an Comprasion Operators pag.";
	$date = "June 15, 2018";
	$banner = "Lab 4:PHP Comprasion Operators.";
	include("./header.php");
?>

<h2>
				Comparison Operators
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a>
			</p>

		<table border="2">
			<caption>Comparison Operators</caption>
			<tr>
				<th>Number</th>
				<th>Operator</th>
				<th>Defination</th>
			</tr>
			<tr>
				<td>1</td>
				<td>==</td>
				<td>Equal to</td>
			</tr>
			<tr>
				<td>2</td>
				<td>!=</td>
				<td>Not Equal to</td>
			</tr>
			<tr>
				<td>3</td>
				<td>&gt;</td>
				<td>Greater than</td>
			</tr>
			<tr>
				<td>4</td>
				<td>&lt;</td>
				<td>Less than</td>
			</tr>
			<tr>
				<td>5</td>
				<td>&gt;=</td>
				<td>Greater than or equal to</td>
			</tr>
			<tr>
				<td>6</td>
				<td>&lt;=</td>
				<td>Less than or equal to</td>
			</tr>
		</table>

		<p>
			<b>Comparison Operator code Example.</b><br/>
			&lt;HTML&gt;<br/>
			&lt;HEAD&gt;<br/>
			&lt;TITLE&gt;Using Comparison Operators&lt;TITLE&gt;<br/>
			&lt;/HEAD&gt;<br/>
			&lt;BODY&gt;<br/>

			&lt;?php<br/>

				$a = 21;<br/>
				$b = 15;<br/>
				echo "Original value of \$a is $a and \$b is $b";<br/><br/>

				if ($a == $b) {<br/>
				echo "TEST 1: \$a equals \$b";<br/>
				} else {<br/>
				echo "TEST 1: \$a is not equal to \$b";<br/>
				}<br/><br/>

				if ($a != $b) {<br/>
				echo "TEST 2: \$a is not equal to \$b";<br/>
				} else {<br/>
				echo "TEST 2: \$a is equal to \$b";<br/>
				}<br/><br/>

				if ($a &gt; $b) {<br/>
				echo "TEST 3: \$a is greater than \$b";<br/>
				} else {<br/>
				echo "TEST 3: \$a is not greater than \$b";<br/>
				}<br/><br/>

				if ($a &lt; $b) {<br/>
				echo "TEST 4: \$a is less than \$b";<br/>
				} else {<br/>
				echo "TEST 4: \$a is not less than \$b";<br/>
				}<br/><br/>
				
				if ($a &gt;= $b) {<br/>
				echo "TEST 5: \$a is greater than or equal to \$b";<br/>
				} else {<br/>
				echo "TEST 5: \$a is not greater than or equal to \$b";<br/>
				}<br/><br/>
				
				if ($a &lt;= $b) {<br/>
				echo "TEST 6: \$a is less than or equal to \$b";<br/>
				} else {<br/>
				echo "TEST 6: \$a is not less than or equal to \$b";<br/>
				}<br/><br/>
				
				?><br/></p>
    			&lt;/BODY&gt;<br/>
	    		&lt;/HTML&gt;<br/>
		

				<p><b>Output:</b></p>
				Orignal value of $a is 21
				 and $b is 15 <br/>
				 TEST 1:$a is not equal to $b<br/>
				 TEST 2:$a is not equal to $b<br/>
				 TEST 3:$a is greater than $b<br/>
				 TEST 4:$a is not less than $b<br/>
				 TEST 5:$a is greater than or equal to $b<br/>
				 TEST 5:$a is not less than or equal to $b<br/>
<?php

include("./footer.php");

?>