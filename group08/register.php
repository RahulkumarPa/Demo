
 <?php

$title = "register";
$file = "register.php";
$date = "26/08/2018";
$banner = "User-Login";
$desc = "This lab allows the user to login to the database display their information.";
include("./header.php");	


$error = "";
$output = "";

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
	$id = "";
	$password = "";
	$conforimPassword ="";
	$firstName = "";
	$lastName = "";
	$emailId = "";
	$salutations = "";
	$firstname = "";
	$lastname ="";
    $stadress1 = "";
    $stadress2 = "";
    $city ="";
    $provinces ="";
    $postalcode = "";
    $primarynumber = "";
    $secondarynumber ="";
    $fax = "";
    $contact_options = EMAIL;
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		 echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
		$id = trim($_POST["user_id"]); 
		$password  = trim($_POST["passwd"]);
		$conforimPassword = trim($_POST["conf_passwd"]);
		$emailId = trim($_POST["email_address"]);
		$salutations = trim($_POST["salutations"]);
		$firstName = trim($_POST["first_name"]);
		$lastName = trim($_POST["last_name"]);
	    $enrolDate = date("Y-m-d",time());
		$conn = db_connect();	
		

	    $stadress1 = trim($_POST["street_address1"]);
	    $stadress2 =trim($_POST["street_address2"]);
	    $city =trim($_POST["city"]);
	    $provinces =trim($_POST["provinces"]);
	    $postalcode = trim($_POST["postalcode"]);
	   
	    $primarynumber =trim($_POST["primarynumber"]);
	    $secondarynumber =trim($_POST["secondarynumber"]);
	   
	    $fax =trim($_POST["fax"]);
	    $contact_options = trim($_POST["contact_options"]);
	
	   if ((!isset($id)) || $id == "")  //Validation for id
		{
			$error .="Please,Enter The ID.<br/>";
		}
	   else if(!((strlen($id)) >= MINIMUM_LOGIN_ID_LENGTH && (strlen($id)) < MAXIMUM_LOGIN_ID_LENGTH ))
		{
				
				$error.="Please,Enter ID between ".MINIMUM_LOGIN_ID_LENGTH." to " .MAXIMUM_LOGIN_ID_LENGTH. " character<br/>";
				$id = "";

		}

	    if(!(isset($password)) || $password == "")  //validation for password
		{
			$error .="Please,Enter The Password.<br/>";
		}
		else  if(!(isset($conforimPassword)) || $conforimPassword == "")
		{
			$error .="Please,Enter The ConfirmPassword.<br/>";
		}
		
		 if(strcmp($password,$conforimPassword)) // validation for confirmpassword
		{
			$error.="Please,Enter Password and Conforim Password same,You enter diffrent password and Confrime Password.<br/>";
		}

		else if(((strlen($password)) >= MAXIMUM_PASSWORD_LENGTH  && (strlen($password)) <MINIMUM_PASSWORD_LENGTH ))
		{
			$error.="Please,Enter Password between ".MINIMUM_PASSWORD_LENGTH." to " .MAXIMUM_PASSWORD_LENGTH. "character<br/>";
			$password = "";
			$conforimPassword= "";	
		}
        
        if((!isset($emailId) || $emailId == ""))  //validation for email
		{ 
			
				$error .="Please,Enter The E-Mail Address.<br/>";
				$emailId="";
			
		}
		else if(strlen($emailId) > MAXIMUM_EMAIL_LENGTH)
		{
				$error.="Please,Enter Email Address less then ".MAXIMUM_EMAIL_LENGTH. "<br/>";
		}
		else if(!filter_var($emailId, FILTER_VALIDATE_EMAIL))
		{
				$error .="Please,Enter the Correct Email Address.<br/>";
				$emailId="";
		}



		
		 if((!isset($firstName) || $firstName == ""))  //validation for first name
		{
			
				$error .="Please,Enter The First Name.<br/>";
				$firstName="";
			
		}
	/*	else if(strlen($firstName) > MAX_FIRST_NAME_LENGTH)
		{
				$error.="Please,Enter First Name less then ".MAX_FIRST_NAME_LENGTH. "<br/>";
		}*/
		else if(is_numeric($firstName))
		{
			$error.="Please,Enter character in First Name,You enter: " .$firstName."<br/>";
			$firstName="";
		}


		if((!isset($lastName) || $lastName == "")) //validation for last name
		{
			
				$error .="Please,Enter The Last Name.<br/>";
				$lastName="";
			
		}
		/*else if(strlen($lastName) > MAX_LAST_NAME_LENGTH)
		{
				$error.="Please,Enter Last Name less then ".MAX_LAST_NAME_LENGTH. "<br/>";
		}*/
		else if(is_numeric($lastName))
		{
			$error.="Please,Enter character in Last Name,You enter: " .$lastName."<br/>";
			$lastName="";
		}

		if((!isset($primarynumber) || $primarynumber == "")) //validation for last name
		{
			
				$error .="Please,Enter The primaryphone.<br/>";
				$lastName="";
			
		}

        else
		{
				$sql = "SELECT * FROM users WHERE id = '".$id."'";
			  	$results = pg_query($conn, $sql);
			// $conn = db_connect();
			// $results = pg_execute($conn, "userLogin",array($id, hash(HASH_ALGO, $password)));
			if(pg_num_rows($results))
			{ 
					//user not found, empty $login to unstick it
				$error.="Sorry,We have already registred with this ".$id.",Please try diffrent ID.<br/>";
				$id = ""; //when echoÃ¢â‚¬â„¢Ã¢â‚¬â„¢ed in the form

			}
		}

		if($error=="")
		{
		
			//$insertQuery="INSERT INTO users (id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES ('".$id."','".$password."','".$firstName."','".$lastName."','".$emailId."','".$enrolDate."','".$enrolDate."')";
			//pg_query($conn, $insertQuery);
			$conn = db_connect();
            $result = pg_execute($conn, "person_Insert",array($id, $salutation, $firstName, $lastName,  $stadress1,  $stadress2)); 	
			header('Location: login.php');
			ob_flush();
		}
	}	

?>
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
		<td><strong>Password</strong></td>
		<td><input type="password" name="passwd" value= "" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Confirm Password</strong></td>
		<td><input type="password" name="conf_passwd" value="" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Email Address</strong></td>
		<td><input type="text" name="email_address" value="<?php echo $emailId; ?>" size="20" /></td>
	</tr>

    <tr>
		<td><strong>Salutation</strong></td>
		<td>
	    <?php buildDropDown('salutations', $salutations); ?>
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
 	 <?php buildDropDown('provinces', $provinces); ?>
 	 </td>
	</tr>
	
	<tr>
		<td><strong>Postalcode</strong></td>
		<td><input type="text" name="postalcode" value="<?php echo $postalcode; ?>" size="6" /></td>
	</tr>

	<tr>
		<td><strong>Primary Phone number</strong></td>
		<td><input type="text" name="primarynumber" value="<?php echo $primarynumber; ?>" size="15" /></td>
	</tr>

    <tr>
		<td><strong>Secondary Phone number</strong></td>
		<td><input type="text" name="secondarynumber" value="<?php echo $secondarynumber; ?>" size="15" /></td>
	</tr>

   <tr>
		<td><strong>Faxnumber</strong></td>
		<td><input type="text" name="fax" value="<?php echo $fax; ?>" size="15" /></td>
	</tr>

	
<tr>
		<td><strong>Contact</strong></td>
		<td><?php echo buildRadio('contact_options', $contact_options); ?>
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
<?php

include("./footer.php");

?>