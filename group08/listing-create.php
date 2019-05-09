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


$property_options =  isset($_COOKIE['property_options'])? $_COOKIE['property_options']:"";
$listing_type = isset($_COOKIE['listing_type']);
if($_SERVER["REQUEST_METHOD"] == "GET")
{

        $property_options  = " ";
        $listing_type = " ";
         $listing_type =   "";
          $price = " ";
          $headline = "";
          $description = " ";
          $status = " ";
          $property_options = "";
          $postal_code = " ";
          $city = " ";
          $bathrooms = " ";
          $bedrooms= " ";
          $cupboards= " ";
          $lot_size = " ";
          $closets = " ";
          $total_rooms = " ";
          $rent_sale = " ";
}

elseif($_SERVER["REQUEST_METHOD"] == "POST")
{
	     echo "<pre>";
		print_r($_POST);
        // print_r($listing_type);
        // echo "<h2>" . $listing_type . "</h2>";
		echo "</pre>";
        // $city_table = "city";

        $user_id = $_SESSION['user'];

          $listing_type = isset($_POST['listing_type']); 
          $price = trim($_POST['price_input']);
          $headline = isset($_POST['headline_value'])? $_POST['headline_value'] : "";
          $description = $_POST['details'];
          $status = isset($_POST['status'])? $_POST['status'] :  "";
          $property_options = isset($_POST['property_options'])? sum_check_box($_POST['property_options']):"";
          $postal_code = trim($_POST['postal_code_input']);
          $city = isset($_POST['city'])? $_POST['city'] :  "";
          $bedrooms = isset($_POST['bedrooms'])? $_POST['bedrooms'] : "";
          $bathrooms = isset($_POST['bathrooms']) ? $_POST['bathrooms'] : "";
          $cupboards = isset($_POST['cupboards']) ? $_POST['cupboards'] : "";
          $lot_size = isset($_POST['lot_size'])? $_POST['lot_size'] :  "";
          $closets = isset($_POST['closets'])? $_POST['closets'] :  "";
          $total_rooms = isset($_POST['total_rooms']) ? $_POST['total_rooms']  : "";
          $rent_sale = isset($_POST['fort']) ? $_POST['fort'] : "";
        
        
       
        
        
       $city_value = getValue('city', $city); /// HERE IS MY GET VALUE FUNCTION, I THINK MAYBE THE PROBLEM IS WITH THE FUNCTION.

       echo "test: ".$city_value;  /// HERE IS MY TEST TO GET THE VALUE  TO STORE IN THE LISTINGS TABLE (IT NEEDS THE NUMBER VALUE FROM THE PROPERTY)


      //  $listing_create_array = array($user_id, $status, $price, $headline, $description, $postal_code, $image, $city, $property_options, $bedrooms, $bathrooms, $cupboards, $listing_type, $lot_size, $closets, $total_rooms, $rent_sale);
       
         $results = pg_execute($conn, "listing_create" ,array($user_id, $status, $price, $headline, $description, $postal_code, $city, $bedrooms, $bathrooms, $cupboards, $listing_type, $lot_size, $closets, $total_rooms, $rent_sale));
 
          $results = pg_execute($conn, "userLogin" ,array($id, hash(HASH_ALGO,$password)));
          header('Location:listing-images.php');
          ob_flush();
           // pg_execute($conn,"listing_create", array($user_id, $status, $price, $headline, $description, $postal_code, $city, $property_options, $bedrooms, $bathrooms, $cupboards, $listing_type, $lot_size, $closets, $total_rooms, $rent_sale));
	    
	        setcookie("PROPERTY_OPTIONS", $property_options, time() + 2592000);

	        //echo "Listing Create Data: ".$user_id." ".$status." ".$price." ".$headline." ".$description." ".$postal_code." ".$image." ".$city." ".$property_options." ".$bedrooms." ".$bathrooms." ".$cupboards." ".$listing_type." ".$lot_size." ".$closets." ".$total_rooms." ".$rent_sale;
           $listing_typ = getProperty('listing_type',$listing_type);

           $result = pg_execute($conn, "Listing_id" ,array($ID));
          
           if(pg_num_rows($result))
           {
            $listingID = pg_fetch_assoc($results, 0);
             $_SESSION["Listing_id"] = $listingID;
           }
         }
     
?>


<div>
<h1><?php echo $listing_typ;?></h1>
<h1 class="title">Create a New Listing</h1>


<form   method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">

                <tr>
                      
                    <td class="right_align"><strong>Listing Type:</strong></td>
            
                    <td><?php buildDropDown('listing_type', $listing_type); ?></td>

                    <td class="right_align"><strong>Headline:</strong></td>

                    <td><textarea cols = "20" rows ="2" name="headline_input" value = "headline_value" class = "right_align"></textarea></td>
                    

                </tr> 
                <tr>
                    <td class="right_align"><strong>Price:</strong></td>
                    <td><input type="text" name="price_input" value="" class="left_align"/></td>
                   
                </tr>
                <tr>
                     
                    <td class="right_align"><strong>Details:</strong></td>
                    <td><textarea cols="40" rows="10" name="details" class="left_align"></textarea></td> 
                   
                    <td><strong>Status:</strong></td>
                    <td><?php buildDropDown('status', $status); ?><td>
                </tr>

            <tr>
		<td><strong>Property Options:</strong></td>
		<td><?php  buildCheckbox('property_options', $property_options); ?></td>
	   <td><strong>Postal Code:</strong></td>
       <td><input type="text" name="postal_code_input" value=""/></td>

    </tr>
        <tr>
            <td><strong>City:</strong></td>
            <td><?php buildDropDown('city', $city); ?></td>
            <td><strong>Number of Bedrooms:</strong></td>
            <td><?php buildDropDown('bedrooms', $bedrooms); ?> </td>
        </tr>
        <tr>
            <td><strong>Number of Bathrooms:</strong></td>
            <td><?php buildDropDown('bathrooms', $bathrooms); ?></td>
            <td><strong>Number of Cupboards:</strong></td>
            <td><?php buildDropDown('cupboards', $cupboards); ?> </td>
        </tr>
        <tr>
            <td><strong>Lot Size (square feet):</strong></td>
            <td><?php buildDropDown('lot_size', $lot_size); ?></td>
            <td><strong>Number of Closets:</strong></td>
            <td><?php buildDropDown('closets', $closets); ?> </td>
        </tr>
        <tr>
            <td><strong>Total Rooms:</strong></td>
            <td><?php buildDropDown('total_rooms', $total_rooms); ?></td>
            <td><strong>For:</strong></td>
            <td><?php buildDropDown('fort', $rent_sale); ?></td>
        </tr>
        

               

    </table>

<div class="btn-search"><input type="submit" name="submit" value="Post Listing"/></div></form></div>

<?php include ("footer.php") ?>