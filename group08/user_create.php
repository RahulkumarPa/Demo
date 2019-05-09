

<?php  

include ("header.php");
include ("names.php");


$user_types = array(  'c', 'c', 'c', 'c', 'c', 'c', 'c','c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 'a');

$email_servers = array("@hotmail.ca", "@yahoo.com", "dcmail.ca" , "@gmail.com" , "@sympatico.ca", "@live.com", "@outlook.com");



$salutations = array('Mr.' , 'Ms.', 'Mrs.');

$provinces = array('ON', 'ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON','ON', 'QC', 'QC','QC','QC','QC','QC','QC','QC','QC','QC','QC','QC','QC','QC','BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'BC', 'AB', 'AB','AB','AB','AB','AB','AB','AB','AB','AB','AB','AB','AB','AB','AB','AB','AB','AB', 'NS', 'MB', 'NB', 'NL', 'NT','NU','PE', 'SK', 'YT');

$postal_code_letters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y');

$street_types = array('Street', 'Avenue', 'Cresent', 'Road', 'Drive' ,'Terrace');

$numbers = array('1','2','3','4','5','6', '7', '8', '9', '0');

$cities = array('Ajax', 'Brooklin', 'Bowmanville', 'Oshawa', 'Pickering', 'Port Perry', 'Whitby');

$street_names= array('Maple', 'Chestnut', 'Elma', 'Queen', 'King', 'Simcoe', 'Perry', 'Ash', 'River', 'Elgin', 'Younge', 'Avenue', 'Albert', 'Victoria');

$contact_methods = array('p', 'e', 'l');

//$user_id_check = pgprepare($conn, "user_id_check", 'SELECT * FROM users WHERE user_id = $1');

function get_random_element($array)
{
	return $array[mt_rand() % sizeof($array)];

}


for($i =1; $i <= 10000; $i++)
{
	$salutation = get_random_element($salutations);
	
	$first_name = ($salutation == 'Mr.')?
		strtolower(get_random_element($male_names)):
		strtolower(get_random_element($female_names));
	
	$last_name = strtolower(get_random_element($last_names));

	$user_id = $last_name.substr($first_name, 0 , 1);
	
	$password = hash('md5', "a");
	
	$user_type = get_random_element($user_types);

	$email_server = get_random_element($email_servers);

	$email_address = $last_name. "." . $first_name. $email_server;
	
	$enrol_date = 2008 + (mt_rand()%10 + 1). "-" .(mt_rand() %12 +1). "-" .(mt_rand() %28 +1);
	
	$last_access = 2018 . "-" . (mt_rand()%9 + 1) . "-" . (mt_rand() %28 + 1);
	
	
	//echo "User data: ".$user_type." ".$user_id." " .$salutation." " .ucwords($first_name)." ".ucwords($last_name)." ".$email_address." ".$enrol_date." ".$last_access." ".$password."<br/>";
	$user_info =  array($user_id, $password, $user_type, $email_address, $enrol_date, $last_access);
	print_r($user_info);
	/*
	$insert_user = pg_prepare($conn, "insert_users", "INSERT INTO users(user_id, password, user_type, email_address, enrol_date, last_access) VALUES($user_id, $password, $user_type, $email_address, $enrol_date, $last_access)");
	
	pg_execute($conn, "insert_users", $user_update);*/
	 //$conn = db_connect();
	 
	//pg_execute($conn, "user_Insert",  array($user_id, $password, $user_type, $email_address, $enrol_date, $last_acces));


echo "User data: ".$user_type." ".$user_id." " .$salutation." " .ucwords($first_name)." ".ucwords($last_name)." ".$email_address." ".$enrol_date." ".$last_access." ".$password."<br/>";


	
	
	$street_address_1 = get_random_element($numbers).get_random_element($numbers).get_random_element($numbers)." ".get_random_element($street_names)." ".get_random_element($street_types);

	$street_address_2 = "";
	
	$city = get_random_element($cities);
	
	$province= get_random_element($provinces);

	$postal_code = get_random_element($postal_code_letters).get_random_element($numbers).get_random_element($postal_code_letters).get_random_element($numbers).get_random_element($postal_code_letters).get_random_element($numbers);

	$primary_phone_number = "(".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers).")"."-".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers)."-".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers).get_random_element($numbers);
	
	$secondary_phone_number = "(".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers).")"."-".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers)."-".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers).get_random_element($numbers);
	

	$fax_number = "(".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers).")"."-".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers)."-".get_random_element($numbers).get_random_element($numbers).get_random_element($numbers).get_random_element($numbers);
	
	$preferred_contact_method = get_random_element($contact_methods);

	//echo "Person data: ".$salutation." ".$first_name." ".$last_name." ".$street_address_1." ".$city." ".$province." ".$postal_code." ".$primary_phone_number." ".$secondary_phone_number." ".$fax_number." ".$preferred_contact_method."<br/>";

	$person_info =  array($user_id,$salutation, ucwords($first_name), ucwords($last_name), $street_address_1, $street_address_2, $city, $province, $postal_code, $primary_phone_number, $secondary_phone_number, $fax_number, $preferred_contact_method);
	
	print_r($person_info);
	//$insert_persons = pg_prepare($conn ,"insert_persons", "INSERT INTO persons(user_id, saluation, first_name, last_name, street_address_1, street_address_2, city, province, postal_code, primary_phone_number, secondary_phone_number, fax_number, preferred_contact_method) VALUES($user_id, $salutation, $first_name, $last_name, $street_address_1, $street_address_2, $city, $province, $postal_code, $primary_phone_number, $secondary_phone_number, $fax_number, $preferred_contact_method)");
	pg_execute($conn, "user_Insert", $user_info);
	pg_execute($conn, "person_Insert", $person_info);


}







?>
