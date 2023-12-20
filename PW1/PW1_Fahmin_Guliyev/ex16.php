<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php    


$given_amount=3000;
$discount_rate;
$reduced_amount;
$vat;
$vat_rate=20;
$final_amount;


switch($given_amount) {
	case $given_amount <1000 :
	$discount_rate=0;
	break;

	case $given_amount >=1000 && $given_amount <=2000 :
	$discount_rate=5;
	break;

	case $given_amount >2000 :
	$discount_rate=10;
	break;

}

$reduced_amount=$given_amount-$given_amount*$discount_rate/100;
$vat=$reduced_amount*$vat_rate/100;
$final_amount=$reduced_amount+$vat;

echo "the discount rate is $discount_rate % \n the reduced amount excluding VAT is $reduced_amount \n the VAT is $vat \n the final amount is $final_amount \n ";



?>

</body>
