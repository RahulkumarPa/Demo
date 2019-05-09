 <?php
 /*
Rahulkumar Patel
12-July-2018
WEBD2201
*/
$title = "WEBD 2201 Lab7 PAGE";
$file = "lab7_bond_info.php";
$date = "July 12 2018";
$banner = "Lab7: Introduction James Bond Movies";
$desc = "This Page is act as the lab7_bond_info page of my webd2201 subject's website.";
include("./header.php");
?>

<b>Click here to go Lab 7 Main page: </b><a href="./lab7.php">Lab 7: Introduction To Database.</a> <br />
<p>
This page utilizes several postgreSQL method calls.  Such as pg_connect(),
pg_query(), and pg_fetch_result(). TO add data in to this table first I have to
add those data in responding sql file like for this file respondiing sql file is
lab7_bond_movies.sql 
</p>
<hr />
<!-- setup the table -->
<table border="1" width="75%">
	<tr>
	      <th>Movie</th><th>Year</th>
		  <th>Actor</th>
	</tr>

<?php
$output = ""; //Set up a variable to store the output of the loop 
//connect
$conn = pg_connect("host=127.0.0.1 dbname=patelr_db user=patelr password=100680118" );  
//N.B. replace the YOUR variables with your specific information
//NOTE: "host=localhost..." SHOULD work, but there is a problem with the config on opentech, use 127.0.0.1 instead

//issue the query
$sql = "SELECT movies.title, movies.year, actors.name
			FROM movies, actors
			WHERE movies.actor=actors.id
			ORDER BY movies.year ASC";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

//generate the table
	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>\n\t</tr>"; 
	}

	echo $output; //display the output
?>
</table>
<!-- end the table -->

<?php

include("./footer.php");

?>
