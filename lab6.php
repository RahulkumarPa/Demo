 <?php
 /*
Rahulkumar Patel
29-June-2018
WEBD2201
*/
$title = "WEBD 2201 Lab6 PAGE";
$file = "lab6.php";
$date = "June 29 2018";
$banner = "Lab6: Self-referring Form W/Data validation page";
$desc = "This Page is act as the lab6 page of my webd2201 subject's website.";
include("./header.php");

function TemperatureConversion($celsius)
	{
			
		$fahrenheit = (((9.0/5.0)*$celsius)+32);
		return $fahrenheit;
	}

?>
 <!--Above I declaired TemperatureConversion as a function that return fahrengeit value. -->
 <!--And below I declair back-end PHP code which validate user input and return output as atable -->
<?php
define ("MAX_ITERATIONS","100");
$error = "";
$output = "";
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	$start = "";
	$stop = "";
	$incr = "";
}
    //To remove whit space and  check method
 	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		$start = trim($_POST["startTemperature"]); 
		$stop  = trim($_POST["stopTemperature"]);
		$incr  = trim($_POST["increment"]);
	//To check user entered vaue in all 3 taxt boxes and those are numeric	
	if((!isset($start) || $start == "") && (!isset($stop) || $stop == "") && (!isset($incr) || $incr == ""))
	{
		$error .= "Please,Enter The Start Temperature in Text Box 1.<br/>";
		$error .= "Please,Enter The Stop Temperature in Text Box 2.<br/>";
		$error .= "Please,Enter The Increment Value in Text Box 3.<br/>";
	}
	elseif((isset($start) || $start != "") && (!isset($stop) || $stop == "") && (!isset($incr) || $incr == ""))
	{
		if(!is_numeric($start))
		{
			$error .= "Sorry,We can't calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";
			$start="";
		}
		else
		{
			$error .= "Please,Enter The Stop Temperature in Text Box.<br/>";
			$error .= "Please,Enter The Increment Value in Text Box.<br/>";
		}
	}
	elseif((!isset($start) || $start == "") && (isset($stop) || $stop != "") && (!isset($incr) || $incr == ""))
	{
		if(!is_numeric($stop))
		{
			$error .= "Sorry,We can't calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";
			$stop="";
		}
		else
		{
			$error .= "Please,Enter The Start Temperature in Text Box.<br/>";
			$error .= "Please,Enter The Increment Value in Text Box.<br/>";
		}
	}
	elseif((!isset($start) || $start == "") && (!isset($stop) || $stop == "") && (isset($incr) || $incr != ""))
	{
		if(!is_numeric($incr))
		{
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Value,You Enter : ". $incr."<br/>";
			$incr="";
		}
		else
		{
			$error .= "Please,Enter The Start Temperature in Text Box.<br/>";
			$error .= "Please,Enter The Stop Value in Text Box.<br/>";
		}
	}
	elseif((isset($start) || $start != "") && (isset($stop) || $stop != "") && (!isset($incr) || $incr == ""))
	{
		if((!is_numeric($start)) && (!is_numeric($stop)))
		{
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";
			$start="";
			$stop="";
		}
		elseif ((is_numeric($start)) && (!is_numeric($stop)))
		{
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";
			$stop="";
		}
		elseif ((!is_numeric($start) )&& (is_numeric($stop)))
		{
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";	
			$start="";
		}
		$error .= "Please,Enter The Increment Value in Text Box.<br/>";
		$incr="";		
	}
	elseif((!isset($start) || $start == "") && (isset($stop) || $stop != "") && (isset($incr) || $incr != ""))
	{
		if((!is_numeric($incr)) && (!is_numeric($stop)))
		{
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr."<br/>";
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";		
			$incr="";
			$stop="";
		}
		elseif ((is_numeric($incr)) && (!is_numeric($stop)))
		{
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";		
			$stop="";
		}
		elseif ((!is_numeric($incr) )&& (is_numeric($stop)))
		{		
    		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr."<br/>";			
			$incr="";
		}
		$error .= "Please,Enter The Start Temperature in Text Box.<br/>";
		$start="";			
	}
	elseif((isset($start) || $start != "") && (!isset($stop) || $stop == "") && (isset($incr) || $incr != ""))
	{
		if((!is_numeric($incr)) && (!is_numeric($start)))
		{
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr."<br/>";
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";				
			$incr="";
			$start="";
		}
		elseif ((is_numeric($incr)) && (!is_numeric($start)))
		{

			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";	
			$start="";
		}
		elseif ((!is_numeric($incr)) && (is_numeric($start)))
		{		
			$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr."<br/>";	
			$incr="";
		}
		$error .= "Please,Enter The Stop Temperature in Text Box.<br/>";
		$stop="";			
	}
	elseif((is_numeric($start)) && (!is_numeric($stop)) && (!is_numeric($incr)))
	{
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr."<br/>";	
		$stop="";
		$incr="";
	}
	elseif((!is_numeric($start)) && (is_numeric($stop)) && (!is_numeric($incr)))
	{
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr."<br/>";	
		$start="";
		$incr="";
	}
	elseif((!is_numeric($start)) && (!is_numeric($stop)) && (is_numeric($incr)))
	{
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";
		$start="";
		$stop="";
	}
	elseif((!is_numeric($start)) && (!is_numeric($stop)) && (!is_numeric($incr)))
	{
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $stop."<br/>";
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr."<br/>";	
		$start="";
		$stop="";
		$incr="";
	}
	elseif(!is_numeric($start) )
	{
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Start Temperature,You Enter : ". $start."<br/>";		
		$start = "";
	}
	elseif(!is_numeric($stop))
	{
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Stop Temperature,You Enter : ". $stop."<br/>";			
		$stop = "";
	}
	elseif(!is_numeric($incr))
	{
		$error .= "Sorry,We can not calculate your table.You MUST insert numeric Value in Increment Temperature,You Enter : " . $incr;		
		$incr = "";
	}
	elseif ($start > $stop)
	{
		$error .="Please,Enter Stop Temperature Greater than Start Temperature.";
		$start = "";
		$stop = "";
	}
	//TO check increment value is positive
	elseif ($incr <= 0)
	{
		$error .="Please,Enter Increment Value Positive(Non -Zero).";
		$incr = "";
	}
	//To check ITERATIONS value is less then MAX_ITERATIONS value
	elseif((($stop-$start)/$incr) >= MAX_ITERATIONS)
	{
		$error .="We can not Calculate your Table.Because Your Iteration is Greater than Maximum iteration";
		$incr = "";
		$start = "";
		$stop = "";
	}
    //All Taxt boxes value are right then it create a table and display as output
	if($error == "")
	{  
		$output.="<h2>OUTPUT</h2>";
		$output .= "<table border=\"3\" style=\"margin-left:auto; margin-right:auto\"><tr><th>celsius Temperature </th> <th>Fahrenheit Temperature </th></tr>";
		for($celsiusTemp = $start; $celsiusTemp <= $stop; $celsiusTemp=$celsiusTemp+$incr)
		{
			$fahrenheitTemp = TemperatureConversion($celsiusTemp);
			$output .= "<tr><td>".$celsiusTemp."&deg;</td>";
			$output .= "<td>".$fahrenheitTemp."&deg;</td></tr>";
		}
		$output .="</table>";
	}
	//IF there is any problems,shows TRY AGAIN message
	else
	{
		$error .= "<br/>Please Try Again";
	}
}	
?>
<h2>Forms And Data Validation In PHP</h2>
		<p>On this  page I described the HTML Form self submitting with the PHP code as Back-end site.On this page I take the Startting,Ending and Increment Temperature Value from the user and Then validate the all value if it is true then calculate the Temperature in to fahrenhit and display it in table.<br/>
		On this page,I used (<b>action="&lt;?php echo $_SERVER['PHP_SELF']; ?&gt;"</b>)in HTML Form for Self Submmitting.<br/>
		And I also used (<b>value="&lt;?php echo $start;?&gt;"</b>)in HTML Form For Sticky Form<br/>
	    In PHP code Form entered in (<b>GET</b>) Method  first and then the Variable Start,Stop,Incr is initilize in <b>POST</b> Method these variables are assigned by relative textboxes from HTML form.Then This PHP code validate these variable and calculate the conversion and Display output as a tabl.
		</p>
<h3><?php echo $error; ?></h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table style="margin-left:auto; margin-right:auto">
		<tr>
			<td>
				<label for="startt">Starting Temperature:</label>
			</td>
			<td>
				<input type="text" name="startTemperature"  value="<?php echo $start;?>" id="startt" /><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label for="endt">Stop Temperature:</label>
			</td>
			<td>
				<input type="text" name="stopTemperature" value="<?php echo $stop;?>"  id="endt" /><br/>
			</td>
		</tr>
		<tr>
			<td>
				<label for="incre">Temperature Increment:</label>
			</td>
			<td>
				<input type="text" name="increment" value="<?php echo $incr;?>" id="incre" /><br/>
			</td>
		</tr>
		<tr><td colspan="2"><input type="submit" value="Calculate Temperature Conversion Table" /></td></tr>
	</table>
	
</form>
<p><?php echo $output; ?></p>

<?php
include("./footer.php");
?>