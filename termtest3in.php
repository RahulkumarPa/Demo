 <?php
 /*
Rahulkumar Patel
07-Aug-2018
WEBD2201
*/
$title = "Termtest3 out ";
$file = "termtest3in.php";
$date = "Aug 07 2018";
$banner = "termtest3in: User registration";
$desc = "this is my termtest3out page";
include("./header.php");
?>
 <h2>Term Test 3 - Favourite Foods.</h2>
      <p>This page implements a self-referring "sticky" form, and validates the entered data conforms to the following rules.</p>
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

<table class="rules-table" border="0">
  <tr>
    <th>Food Name</th>
    <th>Food Group</th>
    <th>Estimated Calories</th>
    <th>Description</th>
  </tr>
</table>
<form method="post" action="termtest3va1in.php">
  <table class="food-table">
    <caption>Insert a new favourite food</caption>
    <tr>
      <td>
        <strong>Food Name:</strong><br/>
        <input type="text" name="food_name" value="" size="30">
      </td>
      <td>
        <strong>Food Group:</strong><br/>
        <input type="text" name="food_group" value="" size="20">
      </td>
      <td>
        <strong>Estimated Calories:</strong><br/>
        <input type="text" name="calories" value="" size="5">
      </td>
    </tr>
    <tr>
      <td colspan="3"><strong>Description (max. 1000 characters): </strong><br/>
      <textarea name="description" rows="5" cols="100" ></textarea></td>
    </tr>
    <tr>
      <td align="center" colspan="3"><input type="submit" value="Save food" /></td>
    </tr>
  </table>
</form>



<?php
include("./footer.php");
?>