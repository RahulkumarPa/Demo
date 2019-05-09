
 <?php
 /*
Rahulkumar Patel
18-June-2018
WEBD2201
*/
$title = "WEBD 2201 Lab1 PAGE";
$file = "lab1.php";
$date = "June 18 2018";
$banner = "Lab1: Basic XHTML page";
$desc = "This Page is act as the lab1 page of my webd2201 subject's website.";
include("./header.php");

?>
	<table border="5" width="100%">
		<tr>
			<td>
	     	 <img src="image/image1.png" alt ="logo"/>
	     	</td>
	     	<td>
		     <h1>Lab 1: XHTML Basics including Special Characters</h1>
			</td>
		</tr>	
      <tr>
      	<td rowspan="6">
      		<p>Click this link to return to the <a href = "./index.php">index page,</a> and 
			<a href = "./lab2.php" >lab2</a>,<a href="./lab3.php" > Lab 3</a>,<a href="./lab4.php" > Lab 4</a>\,<a href="./lab5.php" > Lab 5</a>,<a href="./lab6.php" > Lab 6</a></p>
         </td>
         <td>
			<h3>Einstein's Relativity</h3>
				<p>
					For Eintein's Relativity formula you have to use the superscript(&lt;sup&gt;...&lt;/sup&gt;) and italic (&lt;i&gt;...&lt;/i&gt;) tags. It is wrapped in heading 2(&lt;h2&gt;...&lt;/h2&gt;) tags to make it larger and bolder.<b> NOTE: be careful with proper nesting to ensure the page passes the XHTML validator. This line is bolded using the bold (&lt;b*&gt;...&lt;/b&gt;) tags.</b>
				</p>
				<h2><i>E=mc<sup>2</sup></i></h2>
			</td>
		</tr>
	    <tr>
	       <td>			
				<h3>Currency Conversion</h3>
				<p>For the Currency Conversion Everything writen between (&lt;h2&gt;...&lt;/h2&gt;) tag to display large and bold font.And,For the symboll  of &pound;, &euro;, &yen; I used &amp;pound;, &amp;euro;, &amp;yen; tag.</p>
				<h2>$1.00 CDN = $0.703 USD = &pound;0.487 = &euro;0.651 = &yen;82.77</h2>
		   </td>
	    </tr>
		
		<tr>
			<td>
				<h3>Code Snippet</h3>
				<p>For the code Snippet I used (&lt;code&gt;...&lt;/code&gt;) tag.Between the computer code.For the sign &lt; and &gt; i used &amp;lt; and &amp;gt;.And For white space I used &amp;nbsp;.</p>
				<code>#include &lt;iostream.h&gt;<br/>
				int main()<br/>
				{<br/>
				&nbsp;cout &lt;&lt; "Hello World!" &lt;&lt; endl; <br/>
				&nbsp;return 0;<br/>
				}<br/></code>
		     </td>
		  </tr>
		     
		<tr>
			<td>
				<h3>Chemistry Equation</h3>
				<p>I wrote Chemistry Equation  between (&lt;h2&gt;...&lt;h2&gt;) for larger and bold font.And this tags (&lt;sub&gt;...&lt;/sub&gt;) are used for Subscript text.</p>
				<h2>2H<sub>2</sub>+O<sub>2</sub> =&gt; 2H<sub>2</sub>O + heat</h2>
		    </td>
		 </tr>   
		
		<tr>
			<td>
				<h3>List Example (Order important)</h3>
				<p>For this example I wrote the title <b>How to start a car</b> (This line is bold with tag &lt;b&gt;...&lt;/b&gt;) with tage (&lt;h2&gt;...&lt;/h2&gt;) and for the list I used (&lt;ol&gt;...&lt;/ol&gt;) with  tag (&lt;li&gt;...&lt;/li&gt;) tag for define list of item.</p>
				<h2>How to start a car</h2>
				<ol>
				<li>Place key in the ignition</li>
				<li>Depress the brake pedal</li>
				<li>Turn the ignition key</li>
				</ol>
			</td>
		</tr>

		<tr>
			<td>
				<h3>List Example (Order important)</h3>
				<p>For this example I wrote the title <b>Things to do before my trip </b> (This line is bold with tag &lt;b&gt;...&lt;/b&gt;)  with tage (&lt;h2&gt;...&lt;/h2&gt;) and for the unorderlist I used (&lt;ul&gt;...&lt;/ul&gt;) with tag (&lt;li&gt;...&lt;li&gt;) to add list of item in page.<br/></p>
				<h2>Things to do before my trip</h2>
				<ul>
				<li>Re-new passport</li>
				<li>Convert currency</li>
				<li>Print out reservations &amp; itineraries</li>
				<li>Verify vaccinations are up-to-date</li>
				</ul>
		     </td>
		  </tr>
		</table>  

<?php

include("./footer.php");

?>