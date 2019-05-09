<!--
    Name:           Gary Baker, Rahulkumar Patel, & Heth Patel
    File:           listing-create.php
    Date:           Sept. 30, 2018
    Description:    This page will allow users to post a real estate listing to the database.
-->
 	<?php /*
	Gary Baker, Rahulkumar Patel, & Heth Patel
	WEBD3201
	Sept 30th, 2018
	*/ ?>



    
    <?php 
    		$title = "Listings Search Resluts";
    		$date = "Sept30th, 2018";
    		$filename = "listing-search-results.php";
    		$banner = "Listing Search Results";
    		$description = "This page will allow users to browse random listings stored in the database.";
   	?>
<?php include ("header.php"); ?>

<div>

<h1><?php //dynamic title goes here?></h1>


<table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
    <tr><td><strong>Picture(s)</strong></td><td><strong>Price</strong></td></tr>

    <tr><td rowspan="5"><img  src="./images/house-409451_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /><?php //dynamic array of images here?></td> <td><?php //price output here?></td></tr>
    <tr><td></td><td><strong>Building Type</strong></td></tr>
    <tr><td></td><td><?php //building type output here ?></td></tr>
    <tr><td></td><td><strong>Description</strong></td></tr>
    <tr><td></td><td><?php //description output here ?></td></tr>

</table>

<div class="btn-search"><input type="button" onclick="window.location.href='./listing-display.php'" name="submit" value="View Listing"/></div>


<table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
    <tr><td><strong>Picture(s)</strong></td><td><strong>Price</strong></td></tr>

    <tr><td rowspan="5"><img  src="./images/new-home-1682323_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /><?php //dynamic array of images here?></td> <td><?php //price output here?></td></tr>
    <tr><td></td><td><strong>Building Type</strong></td></tr>
    <tr><td></td><td><?php //building type output here ?></td></tr>
    <tr><td></td><td><strong>Description</strong></td></tr>
    <tr><td></td><td><?php //description output here ?></td></tr>

</table>

<div class="btn-search"><input type="button" onclick="window.location.href='./listing-display.php'" name="submit" value="View Listing"/></div>


<table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
    <tr><td><strong>Picture(s)</strong></td><td><strong>Price</strong></td></tr>

    <tr><td rowspan="5"><img  src="./images/luxury-home-2412145_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /><?php //dynamic array of images here?></td> <td><?php //price output here?></td></tr>
    <tr><td></td><td><strong>Building Type</strong></td></tr>
    <tr><td></td><td><?php //building type output here ?></td></tr>
    <tr><td></td><td><strong>Description</strong></td></tr>
    <tr><td></td><td><?php //description output here ?></td></tr>

</table>
<div class="btn-search"><input type="button" onclick="window.location.href='./listing-display.php'" name="submit" value="View Listing"/></div>

<table  border="0" cellpadding="10" style="margin-left:auto; margin-right:auto;background-color:#fafad2;">
    <tr><td><strong>Picture(s)</strong></td><td><strong>Price</strong></td></tr>

    <tr><td rowspan="5"><img  src="./images/architecture-1836070_1920.jpg" class ="img1" alt="Sorry Image is Unavailable" /><?php //dynamic array of images here?></td> <td><?php //price output here?></td></tr>
    <tr><td></td><td><strong>Building Type</strong></td></tr>
    <tr><td></td><td><?php //building type output here ?></td></tr>
    <tr><td></td><td><strong>Description</strong></td></tr>
    <tr><td></td><td><?php //description output here ?></td></tr>
    

</table>

<div class="btn-search"><input type="button" onclick="window.location.href='./listing-display.php'" name="submit" value="View Listing"/></div>




</div>
<?php include ("footer.php") ?>