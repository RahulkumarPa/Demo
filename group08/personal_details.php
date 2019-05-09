<!-- 
    Name:           Gary Baker, Heth Patel, & Rahulkumar Patel
    File:           personal_details.php
    Date:           26/08/2018
    Description:    This page allows the user to login to the database display their information.
-->
<?php

$title = "Personal-details";
$file = "personal_details.php";
$date = "25/10/2018";
$banner = "User-Details";
$desc = "This lab allows the user to enter their detail and store in  the database .";
include("./header.php");	


$error = "";
$output = "";


if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
	$id = "";
	$salutation = "";
	$firstname = "";
	$lastname ="";
    $stadress1 = "";
    $stadress2 = "";
    $city ="";
    $province ="";
    $postalcode = "";
    $primarunumber = "";
    $secondarynumber ="";
    $fax = "";
    $contact = "";

}
else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$id = trim($_POST["user_id"]);
	$salutation = trim($_POST["salutation"]);
	$firstname = trim($_POST["first_name"]);
	$lastname =trim($_POST["last_name"]);
    $stadress1 = trim($_POST["street_address1"]);
    $stadress2 =trim($_POST["street_address2"]);
    $city =trim($_POST["city"]);
    $province =trim($_POST["province"]);
    $postalcode = trim($_POST["postalcode"]);
    $primarunumber =trim($_POST["primaryphone"]);
    $secondarynumber =trim($_POST["secondaryphone"]);
    $fax =trim($_POST["fax"]);
    $contact = trim($_POST["contact"]);

      if((!isset($id) || $id == ""))
		{
				
				$error.="Please,Enter Your ID for Loging.<br/>";
				$error.="Please,Enter The Password For Loging.<br/>";
		}
		else
		{
			$conn =db_connect();
		    $sql = "SELECT * FROM users WHERE user_id = '".$id."' ";
	        $results = pg_query($conn, $sql);
			
			if(pg_num_rows($results))
			{ 
				//user not found, empty $login to unstick it
				$insertQuery="INSERT INTO persons (salutation,first_name, last_name, street_address1,street_address2,city,province,postal_code,primary_phone_number,secondary_phone_number,fax_number,preferred_contact_method) VALUES ('".$salutation."','".$firstname."','".$lastname."','".$stadress1."','".$stadress2."','". $city."','".$province."','".$postalcode."','".$primarunumber."','".$secondarynumber."','".$fax."','".$contact."')";
		       pg_query($conn, $insertQuery);			
	           header('Location: home.php');
		                ob_flush();
		    }
		    else  
		    {
		    	 $error.="Sorry.<br/>";
		    }
		}
	}	
?>
<h1>You are Register successfully Please enter your details</h1>
 
 <div>
<h4 style="color:#ff0000;"><?php echo $error; ?> </h4>
<h1>Registration</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
	
	<tr>
		<td><strong>Login ID</strong></td>
		<td><input type="text" name="user_id" value="<?php echo $id; ?>" size="20" /></td>
	</tr>

	<tr>
		<td><strong>Salutation</strong></td>
		<td>
	 <select name="salutation">
	    <option value="volvo">Volvo</option>
	    <option value="saab">Saab</option>
	    <option value="fiat">Fiat</option>
	    <option value="audi">Audi</option>
	  </select>
	  </td>
	</tr>
    <tr>
		<td><strong>First Name</strong></td>
		<td><input type="text" name="first_name" value="<?php echo $firstname; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Last Name</strong></td>
		<td><input type="text" name="last_name"  value="<?php echo $lastname; ?>" size="20" /></td>
	</tr>

	
	<tr>
		<td><strong>Street Address1</strong></td>
		<td><input type="text" name="street_address1" value="<?php echo $stadress1; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Street Address2</strong></td>
		<td><input type="text" name="street_address2" value="<?php echo $stadress2; ?>" size="20" /></td>
	</tr>
    
    <tr>
		<td><strong>City</strong></td>
		<td><input type="text" name="city" value="<?php echo $city; ?>" size="20" /></td>
	</tr>

    <tr>
	<td><strong>Province</strong></td>
	<td>
 	<select name="province">
    <option value="ON">ON</option>
    <option value="BC">BC</option>
    <option value="AB">AB</option>
    <option value="MB">MB</option>
    <option value="NS">NS</option>
    <option value="QC">QC</option>
 	 </select>
 	 </td>
	</tr>
	
	<tr>
		<td><strong>Postalcode</strong></td>
		<td><input type="text" name="postalcode" value="<?php echo $postalcode; ?>" size="6" /></td>
	</tr>

	<tr>
		<td><strong>Primary Phone number</strong></td>
		<td><input type="number" name="primaryphone" value="<?php echo $p_primarynumber; ?>" size="15" /></td>
	</tr>

    <tr>
		<td><strong>Secondary Phone number</strong></td>
		<td><input type="number" name="secondaryphone" value="<?php echo $p_secondarynumber; ?>" size="15" /></td>
	</tr>

   <tr>
		<td><strong>Faxnumber</strong></td>
		<td><input type="text" name="fax" value="<?php echo $fax; ?>" size="15" /></td>
	</tr>

	  <tr>
		<td><strong>Contact</strong></td>
		<td><input type="radio" name="contact" value="email" checked> email<br></td>
		<td><input type="radio" name="contact" value="phone" checked> phone<br></td>
		<td><input type="radio" name="contact" value="lettermail" checked>lettermail<br></td>
	</tr>
	
	</table>
	<table border="0" cellspacing="15" style="margin-left:auto; margin-right:auto;" >
<tr>
	<td><input type="submit" value = "Register" /></td>
	<td><input type="reset" value = "Clear" /></td>
</tr>
</table>
</form>
</div>
 <?php include("footer.php"); ?>