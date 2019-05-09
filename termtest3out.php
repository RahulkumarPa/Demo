 <?php
 /*
Rahulkumar Patel
07-Aug-2018
WEBD2201
*/
$title = "Termtest3 out page";
$file = "termtest3out.php";
$date = "Aug 07 2018";
$banner = "termtest3 out ";
$desc = "this is my termtesT3 OUT PAGE";
include("./header.php");
?>
 <h2>Term Test 3 - Favourite Foods.</h2>
  <p>I love food!  Food is great!  I've stored a list of all my favourite foods in a database 
    and am displaying them here to share with all of my friends.</p>
     <hr />
<style>
  .rules-table li {
    padding-bottom: 0.5em;
  }
  .food-table {
    width: 100%;
    background-color: lightgoldenrodyellow;
  }
  .food-table caption {
    font-size: 115%;
    font-weight: bold;
  }
  .food-table td {
    padding: 0.5em;
    border: 1px solid black;
  }
  .food-table input,
  .food-table textarea {
    width: 100%;
  }
</style>
  <table border="1" class="food-table">
  <thead>
    <th>Food Name</th>
    <th>Food Group</th>
    <th>Estimated Calories</th>
    <th>Description</th>
  </thead>


<?php
//connect
$conn = pg_connect("host=127.0.0.1 dbname=patelr_db user=patelr password=100680118" );  
//N.B. replace the YOUR variables with your specific information
//NOTE: "host=localhost..." SHOULD work, but there is a problem with the config on opentech, use 127.0.0.1 instead

//issue the query
$sql = "SELECT name,food_group,estimated_calories,description
			FROM favourite_foods
			ORDER BY estimated_calories desc";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

//generate the table
	for($i = 0; $i < $records; $i++){
		echo "\n\t<tr style= ' margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto'>\n\t\t<td style= ' margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto'>".pg_fetch_result($result, $i, "name")."</td>"; 
		echo "\n\t\t<td align='center' style= ' margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto'>".pg_fetch_result($result, $i, "food_group")."</td>";
		echo "\n\t\t<td align='center' style= ' margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto'>".pg_fetch_result($result, $i, "estimated_calories")."</td>";
		echo "\n\t\t<td style= ' margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto'> ".pg_fetch_result($result, $i, "description")."</td>\n\t</tr>"; 
	}

?>
</table>

<?php

include("./footer.php");

?>