
<?php
/*
Rahulkumar Patel
18-June-2018
WEBD2201
*/

$title = "Lab 2- Working with HTML Tables";
$file = "lab2.php";
$date = "June 18 2018";
$banner = "Lab 2: Working with HTML Tables";
$desc= "This page act as the lab 2 page of my WEBD2201 subject's website.";
include("./header.php");

?>
<table border="5" width="100%">
		<tr style="background-color:rgba(89,146,138,1)">
			<td align="center">
            <img src="image/image1.png" alt="LOGO" />			</td>
			<td align="center">
			<h1>Lab 2:Working with HTML Tables</h1>
			</td>
			
		</tr>
		</table>
		
		
		<table border="5" width="100%">
		<tr style="background-color:rgba(89,146,138,1)">
		<td  valign="top" >
		<h2><a href ="./index.php" >index</a></h2>
		<h2><a href ="./lab1.php" >lab 1</a></h2>
		<h2><a href ="./lab3.php" >lab 3</a></h2>
		<h2><a href ="./lab4.php" >lab 4</a></h2>
		<h2><a href="./lab5.php" > Lab 5</a></h2>
		<h2><a href="./lab6.php" > Lab 6</a></h2>
		<h2><a href="./termtest1.html" > Termtest 1</a></h2>

	</td>
		
		<td style="background-color:rgba(89,146,138,1)" align="center">
		<table border="2" width="70%">
		<caption>HTML Table Tags Description</caption>
		
		<tr>
		<th>Tag</th>
		<th>Description</th>
		</tr>
		
		<tr>
		<td>&lt;table&gt;</td>
		<td>Denotes the start of an HTML table in a web page.</td>
		</tr>
		
		<tr>
		<td>&lt;tr&gt;</td>
		<td>Denotes the start of a row in an HTML table (NOTE:these tags must exist inside &lt;table&gt;...&lt;/table&gt; tags in order to be valid, and work correctly).</td>
		</tr>
		
		<tr>
		<td>&lt;td&gt;</td>
		<td>Denotes a cell (or <u>T</u>able <u>D</u>ata) in an HTML table (NOTE: These tags must exist inside &lt;tr&gt;...&lt;/tr&gt; tags in order to be valid, and work correctly). </td>
		</tr>
		
		<tr>
		<td>&lt;th&gt;</td>
		<td>Very similar to the &lt;td&gt; tags described above but the text is bold and centered.</td>
		</tr>
		
		<tr>
		<td>&lt;caption&gt;</td>
		<td>Will place a caption on an HTML table (Note:This tag must be implemented right after the opening &lt;table&gt; tag in order to be valid and work correctly.</td>
		</tr>
		
		</table>
		<hr/>

		<table border="2" width="70%">
		<caption>My Favorite Books</caption>
		
		<tr>
		<th align="center">Title</th>
		<th align="center">Author</th>
		<th align="center">Year of Publication</th>
		<th align="center">Description</th>
		</tr>
		
		<tr>
		<td>2 States</td>
		<td> Chetan Bhagat</td>
		<td align="center">2009</td>
		<td>This book is all about a love,In this book he describe a love-story of one girl and boy, who came from two different state and culture. 
			
		</td>
		</tr>
		
		<tr>
		<td>Gandhi Autobiography</td>
		<td>Mohandas Gandhi</td>
		<td align="center">1993</td>
		<td>This book is based on Mahtma Gandhiji life story. Mahtma gandhi is national father of India. He was patriot. He did so much things for his country. He spent his life for the nation. </td>
		</tr>
		
		<tr>
		<td>The Love story</td>
		<td> Mayank Nagar</td>
		<td align="center">2012</td>
		<td> This romantic novel tells the story of Raj and Kavi who love each other but can't expalin each other and they both have to sacrifice their love for each other.</td>
		</tr>
		
		</table>
		<hr/>
		
		<p>I create table for a Time-table using HTMl  tag. And I used (&lt;table&gt;,&lt;th&gt;,&lt;td&gt; and &lt;tr&gt;) tags. Here I also used colspan and rowspan for merge column and rows in table.</p>
		<table border="2" width="70%">
		<caption>Timetable</caption>		
		<tr>
		<th></th>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		</tr>
		
	<tr>
		<td>8:10am-<br />9:00am</td>
		<td> </td>
		<td rowspan="2" valign="top" style="background-color:#66ff33">WEBD2201-01<br />CRN: 34123<br />C113</td>
		<td> </td>
		<td> </td>
		<td rowspan="2" valign="top" style="background-color:#66ff33">
	    CSYS2122-01<br />CRN: 34074<br />A320</td>
	</tr>
	<tr>
		<td>9:10am-<br />10:00am</td>
		<td> </td>
		<td colspan="2"  style="background-color:#4ab8a1">
	    <h1 >LUNCH</h1>
	   </td>
	</tr>
	<tr>
		<td>10:10am-<br />11:00am</td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td rowspan="2" valign="top" style="background-color:#66ff33">
	    CSYS212-03<br />CRN: 34076<br />H226</td>
	</tr>
	<tr>
		<td>11:10am-<br />12:00pm</td>
		<td> </td>
		<td> </td>
		<td rowspan="2" valign="top" style="background-color:#66ff33">
	    OOP2200-03<br />CRN: 34748<br />A317</td>
	    <td> </td>
	</tr>
	<tr>
		<td>12:10pm-<br />1:00pm</td>
		<td> </td>
		<td style="background-color:#66ff33" >SYDE2203-03<br />CRN: 34751<br />A150</td>
		<td> </td>
	</tr>
	<tr>
		<td>1:10pm-<br />2:00pm</td>
		<td rowspan="2" valign="top" style="background-color:#66ff33">
	    OOP2200-03<br />CRN: 34748<br />A150</td>
   		<td> </td>
   		<td rowspan="2" valign="top" style="background-color:#66ff33">
	    NETD2202-02<br />CRN: 34747<br />A317</td> 
	    <td style="background-color:#66ff33">NETD2202-03<br />CRN: 35239<br />A320</td>
        <td rowspan="2" valign="top" style="background-color:#66ff33">
	    SYDE2203-03<br />CRN: 34751<br />C318</td> 
	</tr>
	<tr>
		<td>2:10pm-<br />3:00pm</td>
        <td> </td>				
	</tr>
	<tr>
		<td>3:10pm-<br />4:00pm</td>
        <td> </td>		
		<td> </td>
		<td> </td>
	    <td rowspan="2" valign="top" style="background-color:#66ff33">WEBD2201-05<br />CRN: 34785<br />C224<br /></td>
		
	</tr>
	<tr>
		<td>4:10pm-<br />5:00pm</td>
		<td> </td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>5:10pm-<br />6:00pm</td>

		<td></td>
		<td> </td>
		<td></td>
		<td></td>
	</tr>
	
		</table>
		</td>
	</tr>
</table>
<?php

include("./footer.php");

?>