<!-- 
    Name:           Gary Baker, Heth Patel, & Rahulkumar Patel
    File:           update.php
    Date:           26/10/2018
    Description:    This page allows the user to update  their information.
-->
<? php


$title = "login";
$file = "login.php";
$date = "26/08/2018";
$banner = "User-Login";
$desc = "This lab allows the user to login to the database display their information.";
include("./header.php");
?>

<!-- Banner -->
			<section id="banner">
				<h1>User Update</h1>
			</section>



	<table border="0" cellspacing="15" >
		<tr>
			<td><input type="submit" value = "Update Info" class="special"/></td>		
			<td><a href="index.php"><input type="button" value = "Cancel" class="special"/></a></td>
		</tr>

	</table>
<!-- end of main page content -->

<?php include ("footer.php") ?>