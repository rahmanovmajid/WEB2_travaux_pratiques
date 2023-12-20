<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php  


$rate=20;
$amount=4000;

$vat=$rate*$amount/100;
$amount_with_vat=$amount+$vat;

echo "the vat of $rate percent of $amount is $vat \n";
echo "the amount with VAT included is $amount_with_vat \n";



?>

</body>
