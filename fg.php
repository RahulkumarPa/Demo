	
		if((!isset($firstName) || $firstName == ""))
		{
			
				$error .="Please,Enter The First Name.<br/>";
				$firstName="";
			
		}
		else if(strlen($firstName) > MAX_FIRST_NAME_LENGTH)
		{
				$error.="Please,Enter First Name less then ".MAX_FIRST_NAME_LENGTH. "<br/>";
		}
		else if(is_numeric($firstName))
		{
			$error.="Please,Enter character in First Name,You enter: " .$firstName."<br/>";
			$firstName="";
		}


		if((!isset($lastName) || $lastName == ""))
		{
			
				$error .="Please,Enter The Last Name.<br/>";
				$lastName="";
			
		}
		else if(strlen($lastName) > MAX_LAST_NAME_LENGTH)
		{
				$error.="Please,Enter Last Name less then ".MAX_LAST_NAME_LENGTH. "<br/>";
		}
		else if(is_numeric($lastName))
		{
			$error.="Please,Enter character in Last Name,You enter: " .$lastName."<br/>";
			$lastName="";
		}


<tr>
		<td><strong>First Name</strong></td>
		<td><input type="text" name="first_name" value="<?php echo $firstName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Last Name</strong></td>
		<td><input type="text" name="last_name"  value="<?php echo $lastName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Street Address</strong></td>
		<td><input type="text" name="street"  value="<?php echo $street; ?>" size="20" /></td></tr>
		<tr>
		<td><input type="text" name="City"  value="<?php echo $city; ?>" size="20" /></td>
	    </tr>
	    <tr>>
		<td><input type="text" name="postalcode"  value="<?php echo $postalcode; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Phone Number</strong></td>
		<td><input type="tel" name="phone1"  value="<?php echo $phone1; ?>" 
			pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" /></td>
		<td><input type="tel" name="phone2"  value="<?php echo $phone2; ?>"
		 pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" /></td>
	</tr>
	<tr>
		<td><strong>Fax Number</strong></td>
		<td><input type="text" name="fax"  value="<?php echo $fax; ?>" size="12" /></td>
	</tr>
	 <tr>
     	<td><strong>Date Of Birth</strong></td>
     	<td>
	<?php
		$allMonths = array("--Month--","January","February","March","April","May","June","July","August","September","October","November","December");
	?>
	<!--Get birth Month-->
	<select name="birthMonth">
			<?php 
			for($month=0; $month <= 12; $month++)
			{
				$dropDown = "<option value ='". $month . "'>". $allMonths[$month]."</option>";
				echo $dropDown;
			}
			?>
		</select>
		
		<!--Get birth day-->
		<select name="birthDay">
			<?php 
			for($day=0; $day <= 31; $day++)
			{
				if ($day == 0)
				{
					echo "<option value = '$day'>--Day--</option>";
				}
				else
				{
					echo "<option value = '$day'>$day</option>";
				}
			}
			?>
		</select>
		<!--Get birth Year-->
		<select name="birthYear">
			<?php 
			for($year=2020; $year >= 1900; $year--)
			{
				if ($year == 2020)
				{
					echo "<option value = '$year'>--Year--</option>";
				}
				else
				{
					echo "<option value = '$year'>$year</option>";
				}
			}
			?>
		</select>
	</td>
</tr>
	<tr>
		<td><strong>User Type</strong></td>
     <td>	
	 <input type="radio" name="type" value="male" checked> User<br></td>
     <td><input type="radio" name="type" value="female"> Agent<br></td>
    <td> <input type="radio" name="type" value="other"> Other
 </td>
</tr>
    

	</table>
	<table border="0" cellspacing="15" style="margin-left:auto; margin-right:auto;" >
<tr>
	<td><input type="submit" value = "Register" /></td>
	<td><input type="reset" value = "Clear" /></td>
</tr>