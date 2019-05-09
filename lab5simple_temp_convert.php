<?php
/*
Rahulkumar Patel
22-June-2018
WEBD2201
*/
	$title = "Lab 5 Temperature Conversion Using Loop";
	$file = "lab5simple_temp_convert.php";
	$desc= "Lab 5 page for my WEBD2201 Website, which convert temperature simply";
	$date = "June 22, 2018";
	$banner = "Lab 5: PHP Simple_Temp_Convert.";
	include("./header.php");
?>
    <p>
    	<b>Click here to go Lab 5 Main page: </b><a href="./lab5.php">Lab 5: PHP Example from textbook.</a> <br />
    </p>
    <hr/>
    <p>This page convert temperature from Celsius to Fahrenheit.And it start from -40 to 100 with 10 degree interval.For coversion of temperature I used For loop and the Formula (9.0/5.0)*celsius+32.</p>
    <hr/>

    <p><b>Output</b></p>
    <p><b>Temperature Conversion Table</b></p>
 <table border="2" style="margin-left:auto; margin-right:auto;">
	<tr>
		<th>Celsius</th>
			<th>Fahrenheit</th>
	</tr>
    <?php
	    for($celsiusTemp = -40; $celsiusTemp <= 100; $celsiusTemp=$celsiusTemp+10)
	    {
		  $fahrenheitTemp = (((9.0/5.0)*$celsiusTemp)+32);
		  echo "<tr><td>".$celsiusTemp."&deg;</td>";
		  echo"<td>".$fahrenheitTemp."&deg;</td></tr>";
	    }
    ?>
</table>
<hr/>

<p><b>Code for this is</b></p>
<p>
	&lt;?php<br/>
    for($celsiusTemp = -40; $celsiusTemp &lt;= 100; $celsiusTemp=$celsiusTemp+10)<br/>
{<br/>
	$fahrenheitTemp = (((9.0/5.0)*$celsiusTemp)+32);<br/>
	echo "&lt;tr&gt;&lt;td&gt;".$celsiusTemp."&amp;deg;&lt;/td&gt;";<br/>
	echo"&lt;td&gt;".$fahrenheitTemp."&amp;deg;&lt;/td&gt;&lt;/tr&gt;";<br/>
    }<br/>
    ?&gt;
</p>

<?php
include("./footer.php");
?>