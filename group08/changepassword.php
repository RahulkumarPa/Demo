<!-- 
    Name:           Gary Baker, Heth Patel, & Rahulkumar Patel
    File:           about_us.php
    Date:           Sept. 13, 2018
    Description:    This is the information for user to about_us e. It will allow the user to navigate through several web pages.
-->

 <?php

$title = "Password-Change";
$file = "changepassword.php";
$date = "June 28 2018";
$banner = "chngepassword.php :TO change the password";
$desc = "This Page is act as the Change password page of my raelestate's website.";
include("./header.php");

if(isset($_SESSION['user']) )
{
  
  $_SESSION['message'] = $_SESSION['user']["user_id"];  
}
    
$ID ="";
$ID .= $_SESSION['user']["user_id"];
$property_options =  isset($_COOKIE['property_options'])? $_COOKIE['property_options']:"";

  $error = "";
$output = "";

if($_SERVER["REQUEST_METHOD"] == "GET")
{ 
  $id = "";
  $emailId = "";
  $to = " ";
  $newpass = "";


}
else if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
     $id = trim($_POST["login"]); 
     $emailId = trim($_POST["email_address"]);
      $bool = true;
    if ((!isset($id)) || $id == "")  //Validation for id
    {
      $error .="Please,Enter The ID.<br/>";
    }
    else if(!((strlen($id)) >= MINIMUM_LOGIN_ID_LENGTH && (strlen($id)) < MAXIMUM_LOGIN_ID_LENGTH ))
    {
        
        $error.="Please,Enter ID between ".MINIMUM_LOGIN_ID_LENGTH." to " .MAXIMUM_LOGIN_ID_LENGTH. " character<br/>";
        $id = "";
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


    elseif($error = " ")
    {
      if($ID == $id)
      {

        // $conn = db_connect();
        // $sql = "SELECT * FROM users WHERE user_id = '".$ID."' AND email_address = '".$emailId."'";
        // $results = pg_query($conn, $sql);

        $results = pg_execute($conn, "password-update" ,array($id, $emailId));
    

        if(pg_num_rows($results))
        {
            $to= $emailId;
            $newstr = "Admin1234";
            $newPass = hash('md5', $newstr);
            $subject = "New Password";
            $message = "Hi".$ID."your upadated Pasword is ".$newPass.

            $results = pg_execute($conn, "new-user-update" ,array(hash(HASH_ALGO,$newPass), $id,$emailId));

            ini_set('SMTP', "http://127.0.0.1");
            ini_set('smtp_port', "25");
    
            mail($to,$subject,$message,"From: gopalakoliya@gmail.com");
            if($bool == true)
            {
            $error ="new Password seneded to your E-mmaiAccount";
            $error ="Password Updated";
            }
        } 
        else
        {
           $error ="enter right email";
        }
      }
      else 
      {
        $error="Enter Right id";
      }
    }  
  } 

?>

<?php echo $message; ?>
<div id="changep">
  <h4 style="color:#ff0000;"><?php echo $error; ?> </h4>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

  <table border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
      <tr>
          <td><strong>Login ID</strong></td>
          <td><input type="text" name="login" value="<?php echo $id; ?>" size="20" /></td>
     </tr>
    <tr>
        <td><strong>Email Address</strong></td>
        <td><input type="text" name="email_address" value="<?php echo $emailId; ?>" size="20" /></td>
  </tr>
     <tr>
    <td><input type="submit" value = "Update" /></td>
  </tr>

  </table>
</form>
</div>

<?php

include("./footer.php");

?>
