<?php
 /*
Rahulkumar Patel
12-July-2018
WEBD2201
*/
$title = "WEBD 2201 Lab7 PAGE";
$file = "lab7_auto_info.php";
$date = "July 12 2018";
$banner = "Lab7: Introduction ";
$desc = "This Page is act as the lab7_auto_info page of my webd2201 subject's website.";
include("./header.php");
?>

<b>Click here to go Lab 7 Main page: </b><a href="./lab7.php">Lab 7: Introduction To Database.</a> <br />
<p>
This page utilizes several postgreSQL method calls.  Such as pg_connect(),
pg_query(), and pg_fetch_result().for this page I create a two table named movies and actors using Quary <b>CREATE</b> with variavle of id,title,year,name etc.In my database sql file.
Using Quary <b>ALTER</b> I can change the name of table owner of table and many more but here I chane the owner of tables to my userid so I can use table in Apache Server.
After Successfully creating the table I insert the record of movies and actor in respactive table by using Quary <b>INSERT</b> with value.
For,Showing data record of Database I used the <b>SELECT</b> Quary as a string in PHP file.Furthermore, I used the <b>UPDATE</b> Quary to update the owner of automobile.
And then, I wrote  <b>DELETE</b> Quary for delete my least favourite automobile.
And I allso used the some Database function <b>pg_connect(), pg_query(), pg_num_rows(), pg_fetch_result()</b> for connection,quary,how much rows in quary,and to get the Result.
</p>

<!--Create a table to display data-->
	<table border="1" width="75%" >
		<tr>
			<th >Make</th><th >Model</th>
			<th >Year</th><th >Mrsp</th>
		</tr>
		<?php
		// Set a variable to store Output
		$output = "";

		// Set a variable to connect with database
		$conn = pg_connect("host=127.0.0.1 dbname=patelr_db user=patelr password=100680118" );  

		//issue the query
		// 1.for select  specicfic data
		// 2.for select from table
		// 3.for data display in specific order
		$sql ="SELECT automobiles.make, automobiles.model, automobiles.year,automobiles.owner,automobiles.msrp,automobiles.purchase_date  
			   FROM automobiles
			   ORDER BY automobiles.year ASC";
		$result = pg_query($conn, $sql);
        $records = pg_num_rows($result);	

	//generate the table
	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "make")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "model")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>";
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "msrp")."</td>\n\t</tr>"; 
	}

	echo $output; //display the output
    ?>
	</table>

<?php

include("./footer.php");

?>
