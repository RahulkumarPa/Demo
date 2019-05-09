<!-- 
    Name:           Gary Baker, Heth Patel, & Rahulkumar Patel
    File:           about_us.php
    Date:           Sept. 13, 2018
    Description:    This is the information for user to about_us e. It will allow the user to navigate through several web pages.
-->

 <?php

$title = "About-us";
$file = "about_us.php";
$date = "June 18 2018";
$banner = "about_us.php :information about our development team";
$desc = "This Page is act as the about_uspage of my raelestate's website.";
include("./header.php");

?>
<div id="aboutus">
<table>
 <tr>
        <td>
            <img src="images/Gary.jpg" alt="Gary" />           
        </td>
        <td >
            <h1>Gary Baker</h1>
            
        </td>
     </tr>

      <tr  style="background-color:rgba(255,255,255,1)">
        <td >
           <h1>Rahulkumar Patel</h1>
            
        </td>
        <td>
        	<img src="images/rahul.jpg" alt="Rahul" />
            </td>
     </tr>

      <tr  style="background-color:rgba(255,255,255,1)">
        <td>
            <img src="images/heth.jpg" alt="Heth" />           
        </td>
        <td>
            <h1>Heth Patel</h1>
            
        </td>
     </tr>
</table>	
</div>
<?php

include("./footer.php");

?>