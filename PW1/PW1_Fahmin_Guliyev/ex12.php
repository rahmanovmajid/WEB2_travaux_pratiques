<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php    

$given_number_n=4;
$sum_to_n=0;

for ($i=1; $i<=$given_number_n; $i++) {
	$sum_to_n+=$i;
}

echo " the sum from 1 to $given_number_n is $sum_to_n \n";


$factorial=1;
for($i=$given_number_n; $i>1; $i--) {
	$factorial*=$i;
}

echo " the factorial of $given_number_n is $factorial \n";

?>

</body>
