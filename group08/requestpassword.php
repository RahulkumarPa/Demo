<?php 

# user-password-request.php
/*
Name: Group 05
File: user-password-request.php
Date: 2017-11-21
Description : This is where the user will be able to request a password change
Course: Webd3201
*/

$title ="Password Recover";
$banner ="Password Recovery";
$description ="This is where the user will be able to request a password change";			
$filename = "user-password-request.php";

include "header.php"; # bring in the header file containing a nav bar, description, heading

?>

<!-- Banner -->
			<section id="banner">
				<h1>Password Recovery</h1>
				<p>A free responsive HTML5 website template by TEMPLATED.</p>
			</section>

<?php
	$error = ""; # contains the error message string

if($_SERVER["REQUEST_METHOD"] == "GET"){

$emailAddress = ""; # stores the users email


}else if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$emailAddress = trim($_POST["txtInputEmail"]); //the name of the email input box on the form, white-space removed
	//let's do some data validation
	
	if($emailAddress == "")
	{
		//means the user did not enter anything
		$error .= "Please enter an email.\n";
	}
	else if (filter_var($emailAddress, filter_validate_email))
	{
		$error .= "This email is invalid.\n";
	}
	# DATA is good begin database work
	
	if ($error == "")
	{	
		$conn = db_connect(); # connect to the database
		
		if ($conn === false) # connection failed
		{
			$error .= "Could not connect to database.\n";
		}
		else # connection successful*/
		{
			
			# look for user's email credentials

			#$pass = md5($pass);
			# run query in database
			
			$result = pg_execute($conn, "query_get_email", array($emailAddress,$pass));
			# if query fail
			if ($result === false)
			{
				$error .= "Cannot query database.\n";
			}
			# if something found in database
			else if (pg_num_rows($result) > 0)
			{
				$row = pg_fetch_assoc($result);
				$user_type = $row['user_type'];
				
				$result = pg_execute($conn, "query_get_email", array($emailAddress,$pass));			
				$row = pg_fetch_assoc($result);
				foreach ($row as $key =>$value)
				{
					$_SESSION[$key] = $value; 
				}
				
				# On hold for now------------------------------------------------------------------!!!!
			}
			# if both login and password were not found, look for login
			else
			{
				$error .= "Username not found. Please register for our site.";
			}
		}
	}
}

?>

<!-- Email Recovery section -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
						<article>
							<h3>Enter your email for assistance in password recovery:</h3>
							
								<form method="post" action="#">
									<div class="row uniform">
										
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="txtInputEmail" value="<?php echo $emailAddress;?>" size="20" />
										</div>			
							<footer>
							<a href="#" class="button special">Recover Password</a>
								
							</footer>
						</article>
					</div>
				</div>
			</section>


<!-- end of main page content -->
<?php	
	 include "footer.php";
?>
