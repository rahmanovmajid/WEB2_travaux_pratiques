<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php    



for ($i=0; $i<=9; $i++) {
	for ($j=0; $j<=9; $j++) {
		for ($k=0;$k<=9; $k++) {
		echo "$i $j $k \n";
		if(pow($i,3)+pow($j,3)+pow($k,3)==$i*100+$j*10+$k)
		echo "right answer : A=$i, B=$j, C=$k \n";
	
		}
	}
}

?>

</body>
