 <?php
 /*
Rahulkumar Patel
10-July-2018
WEBD2201
*/
$title = "WEBD 2201 Termtest2";
$file = "termtest2.php";
$date = "July 10 2018";
$banner = "Termtest2";
$desc = "This Page is act as the termtest2 page of my webd2201 subject's website.";
include("./header.php");
?>
<?php 
 define("IMPEREAL_SPEED_UNIT","mph");
 define("IMPEREAL_CONSUMPTION_UNIT","MPG");
 define("METRIC_VELOCITY","km/h");
 define("METRIC_CONSUMPTION_UNIT","L/100KM");

$error = "";
$output = "";

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
	$Distance = "";
	$Time = "";
	$fuel = "";
	$Type ="";
	
}
elseif($_SERVER["REQUEST_METHOD"] == "POST")
{
	$Distance = trim($_POst["distance"])
	$Time = trim($_POst["time"])
	$Fuel = trim($_POst["fuel"])
	$Type = trim($_POst["syatem"])
}
 if((!isset($Distance) || $Distance == "") && (!isset($Time) || $Time == "") && (!isset($Fuel) || $Fuel == "") && (!isset($Type) || $Type == ""))
	{
			
			$error .= "Please,Enter Diatsance.<br/>";
			$error .= "Please,Enter Time Travel.<br/>";
			$error .= "Please,Enter Fuel amount.<br/>";
			$error .= "Please,Select Method.<br/>";

	}
	elseif((isset($Distance) || $Distance != "") && (!isset($Time) || $Time == "")  && (!isset($Fuel) || $Fuel == "") && (!isset($Type) || $type == ""))
	{
		$error .= "Please,Enter Time Travel.<br/>";
		$error .= "Please,Enter Fuel amount.<br/>";
		$error .= "Please,Select Method.<br/>";
	}

	elseif((isset($Distance) || $Distance == "") && (!isset($Time) || $Time != "")  && (!isset($Fuel) || $Fuel == "") && (!isset($Type) || $type == "") )
	{
		$error .= "Please,Enter The Distance.<br/>";
		$error .= "Please,Enter Fuel amount.<br/>";
		$error .= "Please,Select Method.<br/>";
	}

	elseif((isset($Distance) || $Distance == "") && (!isset($Time) || $Time == "")  && (!isset($Fuel) || $Fuel != "") && (!isset($Type) || $type == ""))
	{
		$error .= "Please,Enter The Distance.<br/>";
		$error .= "Please,Enter TIme Travel.<br/>";
		$error .= "Please,Select Method.<br/>";
	}

	elseif((isset($Distance) || $Distance == "") && (!isset($Time) || $Time == "")  && (!isset($Fuel) || $Fuel == "") && (!isset($Type) || $type != ""))
	{
		$error .= "Please,Enter The Distance.<br/>";
		$error .= "Please,Enter TIme Travel.<br/>";
		$error .= "Please,Enter Fuel.<br/>";
	}

	elseif ((!isset($Type) || $Type == ""))
	{
		if(!is_numeric($Distance))
		{
			$error.="Please,Enter Numeric Value in TextBox,You Entered :" .$amount."</br>";
		}
		elseif (!is_numeric($Time)) 
		{
			$error.="Please,Enter Numeric Value in TextBox,You Entered :" .$amount."</br>";
		}
		elseif (!is_numeric($Fuel)) 
		{
			$error.="Please,Enter Numeric Value in TextBox,You Entered :" .$amount."</br>"; 
		}
	}
	elseif(($Type="Metric"))
	{
      $output =;
	}
	
 ?>
<h2>Term Test 2.</h2>
<p> This is my second ter test webpage which display information about how efficient road trip I palnned, In metricsa or impereal syestem  of mesuarent </p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin-left:auto; margin-right:auto;" >
	<table border="1" cellpadding="10" align="center">
	
	<tr>
      <td>
        Metric 
        <input type="radio" name="system" value="Metric" />
      </td>
      <td>
        Imperial 
        <input type="radio" name="system" value="Imperial" checked="checked" />
      </td>
    </tr>
    <tr>
      <td>Distance Travelled</td>
      <td><input type="text" name="distance" value="100" /></td>
    </tr>
    <tr>
      <td>Time Travelled</td>
      <td><input type="text" name="time" value="5" /></td>
    </tr>
    <tr>
      <td>Fuel Consumed</td>
      <td><input type="text" name="fuel" value="20" /></td>
    </tr>

    <tr><td colspan="2"><input type="submit" value="Generate Report" /></td></tr>
  </table>

</form>
<h3><hr/></h3>

<h4>
	<?php 
	echo $output; 
	?>
</h4>

<?php
include("./footer.php");
?>
