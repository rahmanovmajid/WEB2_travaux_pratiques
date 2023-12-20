<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php    


$given_age=33;

switch($given_age) {
	case $given_age>=9 && $given_age<=10:
	echo "$given_age ans => c'est poussin";
	break;

	case $given_age>=11 && $given_age<=12:
	echo "$given_age ans => c'est benjamin";
	break;

	case $given_age>=13 && $given_age<=14:
	echo "$given_age ans => c'est minime";
	break;

	case $given_age>=15 && $given_age<=16:
	echo "$given_age ans => c'est cadet";
	break;

	case $given_age>=17 && $given_age<=18:
	echo "$given_age ans => c'est junior";
	break;

	case $given_age>=19 && $given_age<=34:
	echo "$given_age ans => c'est senior";
	break;


	case $given_age>=35:
	echo "$given_age ans => c'est veteran";
	break;
}


?>

</body>
