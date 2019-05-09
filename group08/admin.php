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
    		$title = "Listings Create";
    		$date = "Sept30th, 2018";
    		$filename = "listing-display.php";
    		$banner = "Dislay Listing";
    		$description = "This page will allow users to browse random listings stored in the database.";
   	?>
<?php include ("header.php"); ?>

<div>


<h1>Welcome Administrator!</h1>
<table>
    <tr>
        <td>
            <button onclick="./logout.php"> Logout </button>
        </td>
    </tr>
</table>

</div>
<?php include ("footer.php") ?>