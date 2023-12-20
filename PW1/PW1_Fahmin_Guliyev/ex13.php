<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php    

$a=0;

for($i=1;$i<=1000;$i++){
	$a+=1/pow($i,2);
}

$pi=sqrt($a*6);

echo "pi with 1000 first terms is $pi \n";

$b=0;
for($i=1;$i<=10000;$i++){
	$b+=1/pow($i,2);
}

$pi=sqrt($b*6);

echo "pi with 10000 first terms is $pi \n";

?>

</body>
