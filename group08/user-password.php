<?php
		$title = "Update-User";
    		$date = "Nov 18th, 2018";
    		$filename = "user-password.php";
    		$banner = "Create a Listing";
    		$description = "This page will allow users to post a real estate listing to the database. The post should then be visible in the browse listings page.";
   		include ("header.php");

if(isset($_SESSION['user']) )
{
	
	$_SESSION['message'] = $_SESSION['user'];	
}
		
$ID = "";
$ID .= $_SESSION['user']["user_id"];
$property_options =  isset($_COOKIE['property_options'])? $_COOKIE['property_options']:"";
?>

<?php

$error = "";
$output = "";

	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    $password = "";	
		$emailId = "";
		$firstName = "";
		$lastName = "";	
	    $primarynumber = "";
	}


    else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$password  = trim($_POST["passwd"]);
		$emailId = trim($_POST["email_address"]);
		$firstName = trim($_POST["firstName"]);
		$lastName = trim($_POST["lastName"]);
	    $primarynumber =trim($_POST["primarynumber"]);
	
		$conn = db_connect();	

		 if(!(isset($password)) || $password == "")  //validation for password
		{
			$error .="Please,Enter The Password.<br/>";
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

		if($error=="")
		{
		
		$conn = db_connect();
		 $sql = "SELECT user_id,password FROM users WHERE user_id = '".$ID."' AND password= '".$password."'";
		$results = pg_query($conn, $sql);

		  
          // $results = pg_execute($conn, "userLogin",array($ID, hash('md5', $password))); 	
		 // $sql = "SELECT * FROM users WHERE user_id = '".$id."' AND password= '".$password."'";
		 //   $results = pg_query($conn, $sql);
			
			if(pg_num_rows($results))
			{
				$error .="done<br/>";
				$conn = db_connect();
                $result = pg_execute($conn, "Person-update",array($firstName,$lastName,$primarynumber,$ID)); 
                 $re = pg_execute($conn,"user-update",array($emailId,$ID));	
   
			}
			else
			{
				$error .="Please,Enter The right password.<br/>";
			}
		} 
}

?>
<?php echo $message; ?>
<div>
<h4 style="color:#ff0000;"><?php echo $error; ?> </h4>
<h4 style="color:#0000ff;"><?php echo $message; ?> </h4>

<h1>Update-details</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<table border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
	
	<tr>
		<td><strong>User ID</strong></td>
		<td> <label for="user-ID"><?php echo $ID; ?></label></td>
	</tr>
	<tr>
		<td><strong>Password</strong></td>
		<td><input type="password" name="passwd" value= "" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Email Address</strong></td>
		<td><input type="text" name="email_address" value="<?php echo $emailId; ?>" size="20" /></td>
	</tr>
     <tr>
		<td><strong>First Name</strong></td>
		<td><input type="text" name="firstName" value="<?php echo $firstName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Last Name</strong></td>
		<td><input type="text" name="lastName"  value="<?php echo $lastName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Primary Phone number</strong></td>
		<td><input type="text" name="primarynumber" value="<?php echo $primarynumber; ?>" size="15" /></td>
	</tr>
	<tr>
		<td><strong><a href="changepassword.php">Click here to change password</a></strong></td>
		
	</tr>

	<tr><td>
	<table border="0" cellspacing="15" style="margin-left:auto; margin-right:auto;" >
	<tr>
		<button type="update"  value="update" >Update Value</button></td>
	</tr>
    </table></td>
     </tr>
    </table>
	</form>	


<form  action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
<?php include ("footer.php") ?>