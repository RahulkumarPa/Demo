<?php
/*
Rahulkumar Patel
23-June-2018
WEBD2201
*/
	$title = "Lab 5 Temperature Conversion using Function";
	$file = "lab5function_temp_convert.php";
	$desc= "Lab 5 page for my WEBD2201 Website, which convert temperature using the function";
	$date = "June 23, 2018";
	$banner = "Lab 5: PHP Function_Temp_Convert.";
	include("./header.php");
?>
    <p>
    	<b>Click here to go Lab 5 Main page: </b><a href="./lab5.php">Lab 5: PHP Example from textbook.</a> <br />
    </p>
    <hr/>
    <p><b>Description</b></p>
		<p>This page desplay the temperature conversion of Celsius  to Fahrenheit,And that from -40 to 100 with 10 degree interval.For coversion of temperature I used For loop and the Formula (9.0/5.0)*celsius+32.
		</p>
		<hr/>

		<p><b>Output</b></p>
		<p><b>Temperature Conversion Table</b></p>
		<table border="2" style="margin-left:auto; margin-right:auto;">
			<tr>
				<th>Celsius</th>
				<th>Fahrenheit</th>
			</tr>
		<?php
		    function TemperatureConversion($celsiusTemp)
		    {
			$fahrenheitTemp = (((9.0/5.0)*$celsiusTemp)+32);
			return $fahrenheitTemp;
		    }
	     	for($celsiusTemp = -40; $celsiusTemp <= 100; $celsiusTemp=$celsiusTemp+10)
		    {
			 echo "<tr><td>".$celsiusTemp."&deg;</td>";
			 echo"<td>".TemperatureConversion($celsiusTemp)."&deg;</td></tr>";
		    }
		?>

		</table>
		<hr/>


		<p><b>Code</b></p>
		<p>
			&lt;?php<br/>
			function TemperatureConversion($celsiusTemp)<br/>
		{<br/>
			$fahrenheitTemp = (((9.0/5.0)*$celsiusTemp)+32);<br/>
			return $fahrenheitTemp;<br/>
		}<br/>
		for($celsiusTemp = -40; $celsiusTemp &lt;= 100; $celsiusTemp=$celsiusTemp+10)<br/>
		{<br/>
			
			echo "&lt;tr&gt;&lt;td&gt;".$celsiusTemp."&amp;deg;&lt;/td&gt;";<br/>
			echo"&lt;td&gt;".TemperatureConversion($celsiusTemp)."&amp;deg;&lt;/td&gt;&lt;/tr&gt;";<br/>
		}<br/>
		?&gt;<br/>
		</p>


<?php
include("./footer.php");
?>