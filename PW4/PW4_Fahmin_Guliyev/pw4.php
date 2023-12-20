<?php

include('connectDBalwaysdata.inc.php');

	var_dump($_POST);
	
$query="INSERT INTO `customers` (`title`, `first_name`, `last_name`, `street_address_1`, `street_address_2`, `city`, `zip_code`, `phone`, `email`, `register_date`) VALUES (\"".$_POST['title']."\", \"".$_POST['first_name']."\", \"".$_POST['last_name']."\", \"".$_POST['street_address_1']."\", \"".$_POST['street_address_2']."\", \"".$_POST['city']."\", \"".$_POST['zip_code']."\",\"".$_POST['phone']."\", \"".$_POST['email']."\" , \"" . date("Y-m-d")."\" )";


$result=mysqli_query($link,$query) or die($query . " Error : ". mysqli_error($link));


?>