<tr>
		<td><strong>First Name</strong></td>
		<td><input type="text" name="first_name" value="<?php echo $firstName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Last Name</strong></td>
		<td><input type="text" name="last_name"  value="<?php echo $lastName; ?>" size="20" /></td>
	</tr>
	<tr>
		<td><strong>Sequrity Question</strong></td>
		<td><input type="text" name="sequrity_question"  value="<?php echo $sequrityquestion; ?>" size="20" /></td>
	</tr>
    <tr>
		<td><strong>Sequrity Answer</strong></td>
		<td><input type="text" name="sequrity_answer"  value="<?php echo $sequrityanswer; ?>" size="20" /></td>
	</tr>






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




		{
		
		$insertQuery="INSERT INTO persons (salutation,first_name, last_name, street_address1,street_address2,city,province,postal_code,primary_phone_number,secondary_phone_number,fax_number,preferred_contact_method) VALUES ('".$salutation."','".$firstname."','".$lastname."','".$lastName."','".$stadress1."','".$stadress2."','". $city."','".$province."','".$postalcode."','".$primarunumber."','".$secondarynumber."','".$fax."','".$contact."')";
		pg_query($conn, $insertQuery);			
		
		ob_flush();
			
		}