
 <?php
 /*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
$title = "WEBD 2201 Lab3 PAGE";
$file = "lab3.php";
$date = "June 18 2018";
$banner = "lab3: Formating and layout with CSS";
$desc = "This Page is act as the lab3 page of my webd2201 subject's website.";
include("./header.php");

?>
<table border="5" width="100%">
     <tr  style="background-color:rgba(89,146,138,1)">
        <td align="center">
            <img src="image/image1.png" alt="LOGO" />           
        </td>
        <td align="center" >
            <h1 class="l3h1tag">Introduction to css</h1>
        </td>
     </tr>
   <tr>
    <td rowspan="4">
        <p class="l3ptag2"> Below I used (&lt;a&gt;)tag for connect my other pages of my web-site,and it's style for active,hover,link I declair in my css file</p>
        <h3>Click this link to go to<a href ="./index.php"> index</a></h3>
        <h3>Click this link to go to<a href="./lab1.php" > Lab 1</a></h3>
        <h3>Click this link to go to<a href="./lab2.php" > Lab 2</a></h3>
		<h3>Click this link to go to<a href="./lab4.php" > Lab 4</a></h3>
		<h3>Click this link to go to<a href="./lab5.php" > Lab 5</a></h3>
		<h3>Click this link to go to<a href="./lab6.php" > Lab 6</a></h3>
        <h3>Click this link to go to<a href="./termtest1.html" > Termtest 1</a></h3>
    </td>
    <td>
       <p class="l3ptag">For a heading i used (&lt;h1&gt;)tag and it's style given in webd2201.css file, And i used #000000 as font color ,and "sans-serif" as a font type. And for a background color for this tag I used rgb(0,191,255).And in this file I also mention logo height and width as a image1<br/>
       For this paragraph i  used(&lt;p&gt;)tag and it is style with oblique,16 px font size,and with bakground rgb(0,191,255)(color-code) and I used #ffffff as font color. </p>
        <hr/>

        <div id="lab3div">
        This is  (&lt;div&gt;)tag and for style of this tag I used the border 7px solid with color #4ab8a1 ,and font is "20px",and it's color "#123456",with style bold,and i also mantion margin from right and left side is 20px in wbd2201.css file.
        </div>
        <p class="l3ptag">below I used (&lt;dl&gt;)tag to display data in list order.and I display that list as block and text is align Leftn as well as color is #990000.And allso dusplay orderlist using (&lt;ol&gt;)and all style remaining same.</p>
        </td>
    </tr> 
    <tr>
    <td> 
        <table class="l3table">
            <tr>
             <td>
            <dl>
             <dt>Spports</dt>
                <dd>Cricket</dd>
                <dd>Hocky</dd>
                
                <dt>Sport's-Iqupment</dt>
                <dd>Bat</dd>
                <dd>Ball</dd>
                <dd>H-Stick</dd>
                <dd>Stump</dd>
            </dl>
            </td>
            <td>
                <ol>
                <li>Focus</li>
                <li>Pation</li>
                <li>Dedication</li>
                <li>Talent</li>
                <li>Health</li>
            </ol>
            </td>
            </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
          <p>In last i crate a table using (&lt;table&gt;)tag and describe it's class as a report so i can easily do designing for this particular table in my webd2201.css file,and this table shows the grade report.And it's all style I displayed in my css file.</p>
           <hr/>
       
        <table class="report" >
        <caption><b>Grade Report</b></caption>
        <tr>
        <th class="report">Subject</th>
        <th class="report">Total Mark</th>
        <th class="report">Obtained Mark</th>
        </tr>
        <tr>
        <td class="report">ENGLISH</td>
        <td class="report">50</td>
        <td class="report">35</td>
        </tr>
        <tr>
        <td class="report">HINDI</td>
        <td class="report">50</td>
        <td class="report">45</td>
        </tr>
        <tr>
        <td class="report">SCIENCE</td>
        <td class="report">50</td>
        <td class="report">49</td>
        </tr>
        <tr>
        <td class="report">sCIENCE</td>
        <td class="report">50</td>
        <td class="report">40</td>
        </tr>
        <tr>
        <td class="report">COMMERS</td>
        <td class="report">50</td>
        <td class="report">48</td>
        </tr>
        <tr>
        <th class="report">Total Marks</th>
        <th class="report">250</th>
        <th class="report">217</th>
        </tr>
        </table>
    </td>
</tr>

    
</table>
<?php

include("./footer.php");

?>