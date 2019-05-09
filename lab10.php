 <?php
 /*
Rahulkumar Patel
28-July-2018
WEBD2201
*/
$title = "WEBD 2201 Lab10 PAGE";
$file = "lab10.php";
$date = "July 28 2018";
$banner = "Lab10: User registration";
$desc = "This Page is act as the lab10 page of my webd2201 subject's website.";
include("./header.php");
?>
<p>
	This is a Registration page of my lab website.After successfully registration in the system I redirect this page to the login page(lab9.php) using some predefine function <b>header('Location:...'), ob_start(), ob_flush()</b>.FIrst I validate the all entries ID,Password,Confrim Password, First Name, Last Name, Email Address.After Validation this page check the userid in data base if the same id it is recognize it is show the error else insert all input entity in database using INSERT Query.and then For validating the user's input I used some pre define function like <strong>isset(), is_numeric(), strlen(), strcmp(), filter_var()</strong>.Here, We already know about isset() and is_numeric but, strlen() is for checking the length of string, strcmp() is comparing the two string which is pass in function and return 0 if string is match else return 1, filter_var() is use for validate the email address.
	<b>Lab 9 Data Base File : <a href="./sql/lab9_users.sql">lab9_user.sql</a></b>
</p>
<hr />

<?php

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
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$id = trim($_POST["user_id"]); 
		$password  = trim($_POST["passwd"]);
		$conforimPassword = trim($_POST["conf_passwd"]);
		$firstName = trim($_POST["first_name"]);
		$lastName = trim($_POST["last_name"]);
		$emailId = trim($_POST["email_address"]);
	    $enrolDate = date("Y-m-d",time());
		$conn = db_connect();		
	
	
	   if ((!isset($id)) || $id == "")
		{
			$error .="Please,Enter The ID.<br/>";
		}
	   else if(!((strlen($id)) >= MINIMUM_ID_LENGTH && (strlen($id)) < MAXIMUM_ID_LENGTH ))
		{
				
				$error.="Please,Enter ID between ".MINIMUM_ID_LENGTH." to " .MAXIMUM_PASSWORD_LENGTH. " character<br/>";
				$id = "";

		}
		else
		{
				$sql = "SELECT * FROM users WHERE id = '".$id."'";
				$results = pg_query($conn, $sql);
				if(pg_num_rows($results))
				{ 
					//user not found, empty $login to unstick it
					$error.="Sorry,We have already registred with this ".$id.",Please try diffrent ID.<br/>";
					$id = ""; //when echo’’ed in the form

				}
		}

		if(!(isset($password)) || $password == "")
		{
			$error .="Please,Enter The Password.<br/>";
		}
		else  if(!(isset($conforimPassword)) || $conforimPassword == "")
		{
			$error .="Please,Enter The ConfirmPassword.<br/>";
		}
		if(strcmp($password,$conforimPassword))
		{
			$error.="Please,Enter Password and Conforim Password same,You enter diffrent password and Confrime Password.<br/>";
		}

		else if(((strlen($password)) >= MAXIMUM_PASSWORD_LENGTH  && (strlen($password)) <MINIMUM_PASSWORD_LENGTH ))
		{
			$error.="Please,Enter Password between ".MINIMUM_PASSWORD_LENGTH." to " .MAXIMUM_PASSWORD_LENGTH. "character<br/>";
			$password = "";
			$conforimPassword= "";	
		}


		
		if((!isset($firstName) || $firstName == ""))
		{
			
				$error .="Please,Enter The First Name.<br/>";
				$firstName="";
			
		}
		else if(strlen($firstName) > MAX_FIRST_NAME_LENGTH)
		{
				$error.="Please,Enter First Name less then ".MAX_FIRST_NAME_LENGTH. "<br/>";
		}
		else if(is_numeric($firstName))
		{
			$error.="Please,Enter character in First Name,You enter: " .$firstName."<br/>";
			$firstName="";
		}


		if((!isset($lastName) || $lastName == ""))
		{
			
				$error .="Please,Enter The Last Name.<br/>";
				$lastName="";
			
		}
		else if(strlen($lastName) > MAX_LAST_NAME_LENGTH)
		{
				$error.="Please,Enter Last Name less then ".MAX_LAST_NAME_LENGTH. "<br/>";
		}
		else if(is_numeric($lastName))
		{
			$error.="Please,Enter character in Last Name,You enter: " .$lastName."<br/>";
			$lastName="";
		}



		if((!isset($emailId) || $emailId == ""))
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

		if($error=="")
		{
		
			$insertQuery="INSERT INTO users (id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES ('".$id."','".$password."','".$firstName."','".$lastName."','".$emailId."','".$enrolDate."','".$enrolDate."')";
			pg_query($conn, $insertQuery);
			
					header('Location: lab9.php');
					ob_flush();
			
		}
	}	

?>

<h4 style="color:#ff0000;"><?php echo $error; ?> </h4>
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
		<td><strong>First Name</strong></td>
		<td><input type="text" name="first_name" value="<?php echo $firstName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Last Name</strong></td>
		<td><input type="text" name="last_name"  value="<?php echo $lastName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Email Address</strong></td>
		<td><input type="text" name="email_address" value="<?php echo $emailId; ?>" size="20" /></td>
	</tr>

	</table>
	<table border="0" cellspacing="15" style="margin-left:auto; margin-right:auto;" >
<tr>
	<td><input type="submit" value = "Register" /></td>
	<td><input type="reset" value = "Clear" /></td>
</tr>
</table>
</form>

<?php

include("./footer.php");

?>