<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nese </title>
</head>
<body>

<?php   


$seconds1=423752;
$seconds2=$seconds1;
$days1=intval($seconds2/86400);
$seconds2=$seconds2%86400;
$hours1=intval($seconds2/3600);
$seconds2=$seconds2%3600;
$minutes1=intval($seconds2/60);
$seconds2=$seconds2%60;


echo "$seconds1 seconds is $days1 days, $hours1 hours, $minutes1 minutes, $seconds2 seconds";

 ?>

</body>
