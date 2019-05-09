<?php
		$title = "Listings Create";
    		$date = "Sept 14th, 2018";
    		$filename = "listing-create.php";
    		$banner = "Create a Listing";
    		$description = "This page will allow users to post a real estate listing to the database. The post should then be visible in the browse listings page.";
   		include ("header.php");
if(isset($_SESSION['user']) )
{
	
	$_SESSION['message'] = $_SESSION['user']["user_id"];	
}
		
$ID = " ";
$ID = $_SESSION['user']["user_id"];
 

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	$city = " ";
} 
// else if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     $city = isset($_POST['citys'])? sum_check_box($_POST['city']):"";
//     setcookie("city", $city, time() + 2592000);

//     header("Location:./listing-search.php");
// 	ob_flush();
// 	$_SESSION['Search-city'] = $city;

//}
?>
<script type="text/javascript">
<!--
	/*NOTE: for the following function to work, on your page
			you have to create a checkbox id'ed as city_toggle
				
	<input type="checkbox"  onclick="toggle(this);" name="city[]" value="0">
			
		and each city checkbox element has to be an named as an 
		array (specifically named "city[]")
		e.g.
			<input type="checkbox" name="city[]" value="1">Ajax
	*/
	function toggle(source) {
		checkboxes = document.getElementsByName('city[]');
		for(i = 0; i < checkboxes.length; i++)
		{
			checkboxes[i].checked = source.checked;
		}
	}
		
//-->
</script>


<div>
<h3>welcome <u> <?php echo $message; ?> </u> select city,what you looking for</h3>
</div>

	<table border="0"; background-color:#fafad2;">
	<tr>
		<td>
			<P>Clickarea </P>
		</td>	
	</tr>
	<tr>
		<td>
             <img src="images/search.png" width="1150" height="650" alt="Map"  usemap="#map1" />	
             <map name="map1">
        <area shape="rect" coords="350,220,520,520" href="./listing-search.php?city=1" alt="Ajax">
        <area shape="rect" coords="462,70,630,230" href="./listing-search.php?city=2" alt="Brookllyn">
        <area shape="rect" coords="880,230,1040,550" href="./listing-search.php?city=4" alt="Bowmanville">
        <area shape="rect" coords="695,230,880,540" href="./listing-search.php?city=8" alt="OShawa" >
       	<area shape="rect" coords="190,220,350,520" href="./listing-search.php?city=16" alt="Pickering"  >
      	<area shape="rect" coords="625,5,815,125" href="./listing-search.php?city=32" alt="Portperry">
        <area shape="rect" coords="520,230,695,520" href="./listing-search.php?city=64" alt="Whitby">    
	     </map>		
		</td>
	</tr>
	</table>
	<form  action="listing-search.php" method="post" ><h2>Select more then One city</h2>
			
		    <td>
	               <input type="checkbox"  onclick="toggle(this);" name="city[]" value="0" Text = "select-ALl">SelectAll</td>
		    	<?php  buildCheckbox('city', $city); ?></td>
		</td>
	<div class="btn-search"><input type="submit" name="submit" value="Search city"/></div></form></div>
</form>
<?php include ("footer.php") ?>