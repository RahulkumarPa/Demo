<!--
    Name:           Gary Baker, Rahulkumar Patel, & Heth Patel
    File:           listing-create.php
    Date:           Sept. 24, 2018
    Description:    This page will query the database accoriding to user input. The after the user submits there query they will be taken to a page to browse the listings.
 	<?php /*
	Gary Baker, Rahulkumar Patel, & Heth Patel
	WEBD3201
	Sept 24th, 2018
	*/ ?>
-->


    
    <?php 
    		$title = "Search Listings";
    		$date = "Sept 30th, 2018";
    		$filename = "listing-search.php";
    		$banner = "Search our Listings";
        	$description = "This page will allow users to post a real estate listing to the database. The post should then be visible in the browse listings page.";
            include ("header.php"); 

            if(!isset($_SESSION['user']))
            {
                $_SESSION['message'] = "You must be logged in as an agent to creae a new listing";
                header("Location:./login.php");
                ob_flush();
            }

            if(isset($_SESSION['user']) )
              {
               $_SESSION['message'] = $_SESSION['user']["user_id"];    
              }

              $ID = " ";
              $ID = $_SESSION['user']["user_id"];
                 


           if($_SERVER["REQUEST_METHOD"] == "GET")
            {
                  
              // echo "<pre>";
              // print_r($_GET);
              // echo "</pre>";
              $cityname = $_GET['city'];
              $listing_options ="";
              $fort ="";
              $bedrooms = ""; 
              $bathrooms ="";
                // $property_options = isset($_POST['property_options'])? sum_check_box($_POST['property_options']):"";
                // setcookie("PROPERTY_OPTIONS", $property_options, time() + 2592000);
                // echo "Property options: " . $property_options;


            }

            elseif($_SERVER["REQUEST_METHOD"] == "POST")
            {
                    // echo "<pre>";
                    // //print_r($SESSION['Search-city']);
                    // print_r($_POST);
                    // echo "</pre>";

                    $listing_options = trim($_POST["listing_options"]); 
                    $fort = trim($_POST["fort"]); 
                    $bedrooms = trim($_POST["bedrooms"]); 
                    $bathrooms = trim($_POST["bathrooms"]); 
            }
   	?>


<div>
<h3>welcome <u> <?php echo $ID; ?> </u>  you selected  <?php echo getProperty('city',$cityname); ?> </h3>
<h1 class="title">Search our Listings</h1>


<form  action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
    <table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">

                <tr>
                      
                    <td class="right_align"><strong>Listing Type:</strong></td>
            
                    <td> <?php buildDropDown('listing_options', $listing_options); ?>
                    </td>
                </tr>
                <tr>
                    <td class="right_align"><strong>For:</strong></td>
                    <td>
                        <?php buildDropDown('fort', $fort); ?>
                    </td>
                </tr>
                <tr>
                    <td class="right_align"><strong>BedRoom:</strong></td>
                    <td>
                        <?php buildDropDown('bedrooms', $bedrooms); ?>
                    </td>
                </tr>
                <tr>
                    <td class="right_align"><strong>Bathroom:</strong></td>
                    <td>
                        <?php buildDropDown('bathrooms', $bathrooms); ?>
                    </td>
                </tr> 
                <tr>
                    <td class="right_align"><strong>Price Range:</strong></td>
                    <td><input type="Text" name="minimumPrice"></td>
                    <td><input type="Text" name="maximumPrice"></td>
                   

                </tr>
            </table>
                  <div class="btn-search"><input type="button" onclick="window.location.href='./listing-search-results.php'" name="submit" value="Search"/></div>
</form>


</div>
<?php include ("footer.php") ?>