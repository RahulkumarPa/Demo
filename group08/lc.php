<?php
		$title = "Listings Create";
    		$date = "Sept 14th, 2018";
    		$filename = "listing-create.php";
    		$banner = "Create a Listing";
    		$description = "This page will allow users to post a real estate listing to the database. The post should then be visible in the browse listings page.";
   		  include ("header.php");

        if(!isset($_SESSION['user']) || $_SESSION['user']['users_type'] != AGENT)
        {
        	$_SESSION['message'] = "You must be logged in as an agent to creae a new listing";
        	header("Location:./login.php");
        	ob_flush();
        }
        		//echo "<pre>";
        		//print_r($_COOKIE);
        		//echo "</pre>";
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
        	$city = " ";
        	$bedrooms = " ";
        }
        elseif($_SERVER["REQUEST_METHOD"] == "POST")
        {
        	$city = isselect($_POST['city'])? $_POST['city'] :  "";
        	$bedrooms = trim($_POST['bedrooms']);

            print_r($bedrooms);
                    	echo "string".$city;
        }


?>

<form   method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">

        <tr>
            <td><strong>City:</strong></td>
            <td><?php buildDropDown('city', $city); ?></td>
            <td><strong>Number of Bedrooms:</strong></td>
            <td><?php buildDropDown('bedrooms', $bedrooms); ?> </td>
        </tr>
    </table>

<div class="btn-search"><input type="submit" name="submit" value="Post Listing"/></div></form></div>

<?php include ("footer.php") ?>