<?php

include ("header.php");

$numbers = array('1','2','3','4','5','6','7','8','9','0');

$bathrooms_values = array('1','2','4');

$bedrooms_values = array('1','2','4','8','16');

$city_values = array('1','2','4','8','16','32','64');

$closets_values = array('1','2','4','8');

$cupboards_values = array('1','2','4');



$lot_size_values = array('1','2','4');

$property_option_values = array('1','2','4','8','16');

$sink_values= array('1','2','4');

$total_rooms=array('1','2','4','8','16','32','64','128');

$postal_code_letters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y');

$cities = array('1', '2', '4', '8', '16', '32', '64');

$status_values = array('o','c','h','s');

$rent_or_sale = array('1','2');


$records = pg_query($conn, "SELECT user_id FROM users WHERE users_type = 'a'");

$agents = pg_fetch_all($records);

$conn = db_connect();

$listing_insert = pg_prepare($conn, "listing_insert", "INSERT INTO listings(user_id,status,price,headline,description,postal_code,city,property_options,bedrooms,bathrooms,cupboards,sinks,lot_size,closets,total_rooms,rent_sale)VALUES($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16)"); //have variables for all fields in the listings table EXCPET for listing_id and images

function get_random_element($array)
{
	return $array[mt_rand() % sizeof($array)];

}

for($i = 1; $i <= 1500; $i++)
{
	
	$status = get_random_element($status_values);



	
	$bedroom = get_random_element($bedrooms_values);


	$bathroom = get_random_element($bathrooms_values);


	$city = get_random_element($cities);

	$property_option = get_random_element($property_option_values);

	$cupboard = get_random_element($cupboards_values);

	$sinks = get_random_element($sink_values);
	$lot_size = get_random_element($lot_size_values);

	$closet = get_random_element($closets_values);

	$total_room = get_random_element($total_rooms);

	$rent_sale= get_random_element($rent_or_sale);




	$agent = $agents[mt_rand()%sizeof($agents)];
	$user_id = $agent['user_id'];


	print_r($agent);

	$price_value = rand(125000.00,999999.00);

	
	$listing = array($user_id, $price_value);
	print_r($listing);
	
	$postal_code = get_random_element($postal_code_letters).get_random_element($numbers).get_random_element($postal_code_letters).get_random_element($numbers).get_random_element($postal_code_letters).get_random_element($numbers);

	//$city = get_random_element($cities);
	
	$headline = "This is listing was created for the purposes of WEBD3201";

	$description = "This is a home created for the purposes of WEBD3201";

	$listing_info = array($user_id,$status,$price_value,$headline,$description,$postal_code,$city,$property_option,$bedroom,$bathroom,$cupboard,$sinks,$lot_size,$closet,$total_room,$rent_sale);

 	pg_execute($conn,"listing_insert", $listing_info);
}


include ("footer.php");
?>