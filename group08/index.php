<!-- 
    Name:           Gary Baker, Heth Patel, & Rahulkumar Patel
    File:           about_us.php
    Date:           Sept. 13, 2018
    Description:    This is the information for user to about_us e. It will allow the user to navigate through several web pages.
-->

 <?php

$title = "home";
$file = "home.php";
$date = "June 18 2018";
$banner = "about_us.php :information about our development team";
$desc = "This Page is act as the about_uspage of my raelestate's website.";
include("./header.php");

?>
<div id="detail">
  <h1>Homes for you</h1>
    <table >
      <tr >
        <td >
            <img src="images/ourmoto.jpg" alt="ourmoto" id="ourmoto" />           
        </td>
        <td  >
            <h1 class="hr">Our moto</h1>
            <p>We think our real profit is to satisfy our customer by providing them their dream house.</p>
        </td>
     </tr>

      <tr  style="background-color:rgba(255,255,255,1)">
        <td >
           <h1 class="hr">User</h1>
            <p>We provide user accessablity, So user can search their dream house where they want.</p>
        </td>
        <td >
        	<img src="images/user.jpg" alt="user" id="user" />
            </td>
     </tr>

      <tr  style="background-color:rgba(255,255,255,1)">
        <td >
            <img src="images/agent.jpg" alt="agent" id="agent" />           
        </td>
        <td  >
            <h1 class="hr">Agent</h1>
            <p>We think in real-estate bussiness agents are most iportant, becasue they are the main key for a client to 
            open a relationship with the house owner or seller.</p>
        </td>
     </tr>

     <tr  style="background-color:rgba(255,255,255,1)">
       <td>
            <h1 class="hr">Our Bussiness Policy</h1>
            <p>We belive in transparent bussiness policy so our client are feel free to 
            discuss everything about their requirement.</p>
        </td>
        <td >
            <img src="images/policy.jpg" alt="Policy" id="policy" />           
        </td>

     </tr>
    </table>	
 </div>
<?php

include("./footer.php");

?>

	



