<!DOCTYPE html>
<html lang="en-US">

  <head>
      <meta charset="utf-8">
      <link rel = "stylesheet" type = "text/css" href = "trigonometry.css" />
      <title>PW1 : Trigonometry World</title>
  </head>
  <body>

    <h1>Welcome to Trigonometry World!</h1>

    <table style="width:100%">
  <tr>
    <th>Degree</th>
    <th>Radian</th>
    <th>Sine</th>
    <th>Cosine</th>
    <th>Tangent</th>
    <th>Cotan</th>
  </tr>

  

<?php
 

for ($deg = 0; $deg <= 90; $deg++) {
    $rad = deg2rad($deg);
    $sin = sin($rad);
    $cos = cos($rad);
    $tan = tan($rad);
    if ( $tan  == 0 ){
      echo "<tr>
        <td>$deg</td>
        <td>$rad</td>
        <td>$sin</td>
        <td>$cos</td>
        <td>$tan</td>
        <td>∞</td>
      </tr>";
      continue;
    }
    $cot = 1.0 / $tan;
    echo "<tr>
      <td>$deg</td>
      <td>$rad</td>
      <td>$sin</td>
      <td>$cos</td>
      <td>$tan</td>
      <td>$cot</td>
    </tr>"; 
}
?>

  </body>


<footer>
  <p>Posted by: Fahmin Guliyev</p>
  <p>Contact information: <a href="mailto:fahmin.guliyev@ufaz.az">
  fahmin.guliyev@ufaz.az</a></p>
</footer>

</html>
 
