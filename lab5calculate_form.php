<?php
/*
Rahulkumar Patel
22-June-2018
WEBD2201
*/
	$title = "Lab 5 Calculate form";
	$file = "lab5calculate_form.php";
	$desc= "Lab 5 page for my WEBD2201 Website, whichcalculate user input and show result .";
	$date = "June 22, 2018";
	$banner = "Lab 5: Calculate-form.";
	include("./header.php");
?>
     <p>
    	<b>Click here to go Lab 5 Main page: </b><a href="./lab5.php">Lab 5: PHP Example from textbook.</a> 
	 </p>
	 <hr/>
<p><b>Description</b></p>
<p>In this page I calulate  two variable with Addition,Subtraction,Multiplication and Division.For this I used the HTML form with PHP code.The HTML form post data on diffrent page to calculate the result and Print on page,For this I used the following code.</p>
	<hr/>
<form method="post" action="lab5calculate.php">
<p>Value 1: <input type="text" name="val1" size="10"/></p>
<p>Value 2: <input type="text" name="val2" size="10"/></p>
<p>Calculation:<br/>
<input type="radio" name="calc" value="Add"/> Add<br/>
<input type="radio" name="calc" value="Subtract"/> Subtract<br/>
<input type="radio" name="calc" value="Multiply"/> Multiply<br/>
<input type="radio" name="calc" value="Divide"/> Divide</p>

<p><input type="submit" name="submit" value="Calculate"/></p>
<hr/>
<p><b>Code For HTML Form</b></p>
<p>&lt;form method = "post" action="lab5calculate.php" /&gt;</p>
<p>Value 1: &lt; input type="text" name="val1" size="10"/&gt;</p>
<p>Value 2: &lt; input type="text" name="val2" size="10"/&gt;</p>
<p>&lt;;input type="radio" name="calc" value="add"/&gt; add</p>
<p>&lt;input type="radio" name="calc" value="subtract"/&gt; subtract</p>
<p>&lt;input type="radio" name="calc" value="multiply"/&gt; multiply</p>
<p>&lt;input type="radio" name="calc" value="divide"/&gt; divide</p>
<p>&lt;input type="submit" name="submit" value="Calculate"/&gt;</p>
<hr/>

<p><b>Code For PHP Calculation on lab5alculate.php </b></p>
<p>
&lt;?php<br/>
if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] =="")) {<br/>
}<br/>

if ($_POST['calc'] == "add") {<br/>
    $result = $_POST['val1'] + $_POST['val2'];<br/>


} else if ($_POST['calc'] == "subtract") {<br/>
    $result = $_POST['val1'] - $_POST['val2'];<br/>
} else if ($_POST['calc'] == "multiply") {<br/>
    $result = $_POST['val1'] * $_POST['val2'];<br/>
} else if ($_POST['calc'] == "divide") {<br/>
    $result = $_POST['val1'] / $_POST['val2'];<br/>
}<br/>
?&gt;</p>

<hr/>


</form>
<?php
include("./footer.php");
?>