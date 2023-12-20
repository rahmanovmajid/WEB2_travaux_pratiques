<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php    


$credit_card=4561261212345467;
$sum=0;
$a;

while($credit_card>0) {
$a=$credit_card%10;
$sum+=$a;
$credit_card/=10;
$a=$credit_card%10;
$a*=2;
if($a>9) $a-=9;
$sum+=$a;
$credit_card/=10;
}

if($sum%10==0)
echo "credit card is valid\n";
else
echo "credit card is not valid \n";


?>

</body>
