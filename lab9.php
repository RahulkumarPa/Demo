<?php
 /*
Rahulkumar Patel
22-July-2018
WEBD2201
*/
$title = "WEBD 2201 Lab9 PAGE";
$file = "lab9.php";
$date = "July 22 2018";
$banner = "Lab9: User login";
$desc = "This Page is act as the lab9 page of my webd2201 subject's website.";
include("./header.php");
?>

 <p>This page is Login Page of my website.In this page I used the HTML form to input and submit the users data.And I creat one database table named <b>users</b> and store the all user details in the table.When user enter ID and Password then lab9.php file check the ID and Password from the data base if it is correct then it is shows the all details of User on the top of page.For this I used some predefined function of database.And I also included one functionality that is Last Access date.When user login in page the last date is update in database and it is Printing on current login.<br/>
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
	
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$id = trim($_POST["login"]); 
		$password  = trim($_POST["pass"]);
		
	
	
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
			$sql = "SELECT id, first_name, last_name, email_address, enrol_date, last_access FROM users WHERE id = '".$id."' AND password= '".$password."'";
			$results = pg_query($conn, $sql);
				if(pg_num_rows($results))
				{ 	
					//not zero means something was found
					//user found, use pg_fetch_result to pull user specific info to display
					
					echo "\n\t\t<strong>ID: </strong>".pg_fetch_result($results,"id")."</br>"; 
					echo "\n\t\t<strong>First Name: </strong>".pg_fetch_result($results,"first_name")."</br>"; 
					echo "\n\t\t<strong>Last Name :</strong>".pg_fetch_result($results,"last_name")."</br>";
					echo "\n\t\t<strong>Email Adderess :</strong>".pg_fetch_result($results,"email_address")."</br>";
					echo "\n\t\t<strong>Enrol Date :</strong>".pg_fetch_result($results,"enrol_date")."</br>";
					echo "\n\t\t<strong>Last Access :</strong>".pg_fetch_result($results,"last_access")."</br>";
					echo '</fieldset>';
					$updateSql = "UPDATE users SET last_access = '". date("Y-m-d",time()) . "' WHERE id = '".$id."'";
					pg_query($conn,$updateSql);
					
				}
				else
				{
					//user not found, check for just login id
					$sql = "SELECT * FROM users WHERE id = '".$id."'";
					$results = pg_query($conn, $sql);
					if(!pg_num_rows($results))
					{ 
						//user not found, empty $login to unstick it
						$error.="Sorry,You enter Wrong User ID,Please Enter Correct User ID. You Entered: " .$id;
						$id = ""; //when echo’’ed in the form

					}
					else
					{
						$error.="Please,Enter Correct Password For User ".$id;
					}
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
<p style="color:#3A5DBF;">
Please wait after pressing <strong>Log in</strong>
while we retrieve your records from our database.<br/>
<em>(This may take a few moments)</em>
</p>
						

<?php

include("./footer.php");

?>