<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php    

$given_amount=369;
$manat1;
$manat5;
$manat10;
$manat20;
$manat50;
$manat100;
$manat200;


$manat200=intval($given_amount/200);
$given_amount=$given_amount%200;
$manat100=intval($given_amount/100);
$given_amount=$given_amount%100;
$manat50=intval($given_amount/50);
$given_amount=$given_amount%50;
$manat20=intval($given_amount/20);
$given_amount=$given_amount%20;
$manat10=intval($given_amount/10);
$given_amount=$given_amount%10;
$manat5=intval($given_amount/5);
$manat1=intval($given_amount%5);

echo "the given amount is exchanged as $manat200 * 200, $manat100 * 100, $manat50 * 50, $manat20 * 20, $manat10 * 10, $manat5 * 5, $manat1 * 1\n";


?>

</body>
