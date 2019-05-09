<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
	$title = "Lab 4 - Assignment Operators";
	$file = "lab4assignmentoperators.php";
	$desc= "Lab 4 page for my WEBD2201 Website, which act as an Assignment Operators pag.";
	$date = "June 15, 2018";
	$banner = "Lab 4:PHP Assignment Operators.";
	include("./header.php");
?>

<h2>
				Assignment Operators
			</h2>
			<p>
				<b>Click here to go Lab 4 Main page: </b><a href="./lab4.php">Lab 4 : PHP Chapter Files from textbook.</a> 
			</p>

		<table border="5">
			<caption>Assignment Operators</caption>
			<tr>
				<th>number</th>
				<th>Operator</th>
				<th>Example</th>
				<th>Action</th>
			</tr>
			<tr>
				<td>1</td>
				<td>+=</td>
				<td>$a += 3;</td>
				<td>This Operator look like a = a + 3 so increament the variable with right side value.</td>
			</tr>
			<tr>
				<td>2</td>
				<td>-=</td>
				<td>$a -= 3;</td>
				<td>This Operator look like a = a - 3 so decreament the variable with right side value.</td>
			</tr>
			<tr>
				<td>3</td>
				<td>.=</td>
				<td>$a .= "String";</td>
				<td>This Operator concatenates the string with the right side string.</td>
			</tr>
		</table>

		<p>Example Code for above operators:</p>
		$myNumber = 3;<br/>
		echo "My Number is $myNumber";<br/>
		$myNumber += 5;<br/>
		echo "After Increment operator My number is $myNumber";<br/>
		$myNumber -=2;<br/>
		echo "After Decreament operator My number is $myNumber";<br/>
		$myNumber .= "Grade";<br/>
		echo "Final answer : $myNumber";<br/><br/>

		<b>Output of above code</b>
		My Number is 3<br/>
		After Increment operator My number is 8<br/>
		After Decreament operator My number is 1<br/>
		Final answer : 5 Grade

<?php

include("./footer.php");

?>