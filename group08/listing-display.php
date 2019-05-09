<!--
    Name:           Gary Baker, Rahulkumar Patel, & Heth Patel
    File:           listing-create.php
    Date:           Sept. 30, 2018
                    
    Description:   This page will allow users to view a desired selection from their search.
-->
 	<?php /*
	Gary Baker, Rahulkumar Patel, & Heth Patel
	WEBD3201
	Sept 30th, 2018
	*/ ?>



    
    <?php 
    		$title = "Listings Create";
    		$date = "Sept30th, 2018";
    		$filename = "listing-display.php";
    		$banner = "Dislay Listing";
    		$description = "This page will allow users to view a desired selection from their search.";
   	?>
<?php include ("header.php"); ?>

<div>

<h1><?php //dynamic title goes here?></h1>


<table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
    
    <tr><td colspan="2"><strong>Picture(s)</strong></td><td><strong>Price</strong></td></tr>
    
    <tr><td><img  src="./images/family-home-475879_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /></td><td><img  src="./images/floor-2228277_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /></td> <td><?php //price output here?></td></tr>
    
    <tr><td><img  src="./images/kitchen-1940177_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /></td><td><img  src="./images/bedroom-1940169_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /></td><td><strong>Building Type</strong></td></tr>
    
    <tr><td><img  src="./images/home4.jpg" class ="img1" alt="Sorry Image is Unavailable" /></td><td><img  src="./images/porch-186402_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /></td><td><p></p><?php //building type output here ?></td></tr>
    
    <tr><td colspan= "2"></td><td><strong>Description</strong></td></tr>
    
    <tr><td colspan = "2"></td><td><p></p><?php //description output here ?></td></tr>

</table>


</div>
<?php include ("footer.php") ?>