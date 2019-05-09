<!-- 
    Name:           Gary Baker, Heth Patel, & Rahulkumar Patel
    File:           login.php
    Date:           26/08/2018
    Description:    This page allows the user to login to the database display their information.
-->
 
 	 <?php

$title = "login";
$file = "login.php";
$date = "26/08/2018";
$banner = "User-Login";
$desc = "This lab allows the user to login to the database display their information.";
include("./header.php");	
//session_start();

$error = "";
$output = "";
//$id = isset($_COOKIE["LOGIN_COOKIE"])?$_COOKIE["LOGIN_COOKIE"]:"";

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
	$id = "";
	$password = "";
	
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$id = isset($_POST["login"])?trim($_POST["login"]):"";

		$password  = isset($_POST["pass"])?trim($_POST["pass"]):"";
		
	
	
		if((!isset($id) || $id == "") && (!isset($password) || $password == ""))
		{
				
				$error.="Please,Enter Your ID for Loging.<br/>";
				$error.="Please,Enter The Password For Loging.<br/>";
				

		}
		elseif((isset($id) || $id != "") && (!isset($password) || $password == ""))
		{
			
				$error .="Please,Enter The Password For Login.";
			
		}
		elseif ((!isset($id) || $id == "") && (isset($password) || $password != ""))
		{
			
				$error .="Please,Enter The ID For Login.";
				
		}
		else
		{
			 
		 $conn = db_connect();
		//$sql = "SELECT user_id, email_address ,users_type FROM users WHERE user_id = '".$id."' AND password= '".$password."'";
		//$results = pg_query($conn, $sql);
        		$login_info = array($id,hash(HASH_ALGO, $password));
			//print_r($login);
			$results = pg_execute($conn, "userLogin",$login_info);
			//echo "Number of results: ". pg_num_rows($results);
			//$results = pg_execute($conn, "userLogin",array($id, hash(md5, $password)));
			 
			if(pg_num_rows($results))
				{ 	
					//not zero means something was found
					//user found, use pg_fetch_result to pull user specifics info to display
					setcookie("LOGIN_COOKIE", $id, time()+ COOKIE_LIFESPAN);
					 
					 $user = pg_fetch_assoc($results, 0);
						//print_r($user);
                    $_SESSION ['user'] = $user;

                     if ($user["users_type"] == ADMIN)
		              {	
		                header('Location: admin.php');
		                 ob_flush();
		              }
		              elseif($user["users_type"] == CLIENT)
		              {
		                header('Location: welcome.php');
		                 ob_flush();
		              }
		              elseif($user["users_type"] == PENDING.AGENT)
		              {
		                $message .= "Your user has not been enabled yet.  PLease check again later.";                
		              }elseif($user["users_type"] == AGENT)
		              {
		                header('Location: dashboard.php');
		                ob_flush();
		              }
                    pg_execute($conn, "user_last_access", array(date("Y-m-d",time()), $id));
			      				  
			
					 
					echo "\n\t\t<strong>Email Adderess :</strong>".pg_fetch_result($results,"email_address")."</br>";
					$id;
				}
				else
				{
						//user not found, empty $login to unstick it
						$error.="Sorry,You enter Wrong User ID,Please Enter Correct User ID. You Entered: " .$id;
						$id = ""; //when echo’’ed in the form	
				}
				 
		}

	}	
?>
 
 
<h4 style="color:#ff0000;"><?php echo $error; ?> </h4>
<h1 style="color:#3A5DBF; text-align: center;" >Please Login </h1>
<h2 style="color:#3A5DBF; text-align: center;" >Entered your ID and Password To connect the System</h2>
			
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<table border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
<tr>
	<td><strong>Login ID</strong></td>
	<td><input type="text" name="login" value="<?php echo $id; ?>" size="20" /></td>
</tr>
<tr>
	<td><strong>Password</strong></td>
	<td><input type="password" name="pass" value="" size="20" /></td>
</tr>
</table>
<table border="0" cellspacing="15" style="margin-left:auto; margin-right:auto;" >
<tr>
	<td><input type="submit" value = "Log In" /></td>
	
	<td><input type="reset" value = "Reset" /></td>
</tr>
</table>
</form>
	
 
 <?php include("footer.php"); ?>