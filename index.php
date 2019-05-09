
 <?php
 /*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
$title = "WEBD 2201 INDEX PAGE";
$file = "index.php";
$date = "June 18 2018";
$banner = "WEBD 2201 Web Development-Fundamentals";
$desc = "This Page is act as the index page of my webd2201 subject's website.";
include("./header.php");

?>

    <table border="5" width="100%">
        <tr>
            <td >
        	 <img src="image/image1.png" class="image1" alt ="logo"/>
        	 <a href="https://durhamcollege.ca/" ><img src="image/dclogo.png" class="image2" alt="clg"/></a>
             </td>
    <td>

    <h1>Index Page</h1>
    </td>
    </tr>
    <tr>
     <td>
    <h2>Click this link to go to<a href="./lab1.php" > Lab 1</a></h2>
    <h2>Click this link to go to<a href="./lab2.php" > Lab 2</a></h2>
    <h2>Click this link to go to<a href="./lab3.php" > Lab 3</a></h2>
	<h2>Click this link to go to<a href="./lab4.php" > Lab 4</a></h2>
	<h2>Click this link to go to<a href="./lab5.php" > Lab 5</a></h2>
	<h2>Click this link to go to<a href="./lab6.php" > Lab 6</a></h2>
    </td>
        <td>
     <p>Hi I am Rahul and, Welcome to my homepage.This website is created for learning purposes in the <a href="http://opentech2.durhamcollege.org/pufferd/webd2201/index.php" >WEBD2201.</a>The course is taken at<a href="https://durhamcollege.ca/" > Durham College.</a> <br/>This webpage will eventually have links to all other labs in the course.</p>
    </td>
    </tr>
</table>     

<?php

include("./footer.php");

?>