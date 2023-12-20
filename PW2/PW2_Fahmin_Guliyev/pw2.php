<!DOCTYPE html>
<html lang="en-US">

<head>
      <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="pw2.css">
    <title>PW2 : PHP Environment</title>
</head>

<body>

    <h1>Welcome to Practical Work 2.</h1>
    <?php

    /*_______________________________________________ */

    echo "Objective N1: PHP Date and Time functions";
    echo "<br><br><br>";

    //1)
    echo "Today's date: " . date('d/m/y') . " (French standard format)";
    echo "<br>";
    echo "Today's date: " . date("Y/m/d");
    echo "<br>";

    //2)
    $current_ts = time();
    echo "Current timestamp: " . $current_ts . "<br>";
    echo "Timestamp for this moment: " . date("d/m/Y", $current_ts) . "<br>";

    $daybefore_ts = strtotime("-1 day", $current_ts);
    echo "Date of one day before current timestamp: " . $daybefore_ts . "<br><br>";

    //3)
    $birthday_ts = strtotime("30-06-2020");
    echo "Timestamp due to next birthday: " . $birthday_ts . "<br>";
    echo "Number of the week will be: " . date("oW", $birthday_ts) . "<br><br>";

    //4)
    $birthExample_ts = strtotime('30-06-2020');
    $birthExample = date('d/m/Y', $birthExample_ts);
    echo "The Birthday is on: " . $birthExample . "<br>";
    function showTSandDate($birthExample_ts)
    {
        $dayMonthAfter = strtotime('+1 day +1 month', $birthExample_ts);
        echo "1 day and 1 month after the date: " . date('d/m/Y', $dayMonthAfter) . " and the timestamp due to new date: " . $dayMonthAfter . "<br><br>";
    }

    showTSandDate($birthExample_ts);

    //5) 
    $beginDate = time();
    $endDate = strtotime("+366 days", $beginDate);

    while ($beginDate <= $endDate) {
        echo date("d/m/Y", $beginDate) . ",\n";
        $beginDate = strtotime("+1 day", $beginDate);
    }
    echo "<br><br>";

    //6)
    echo "In English: " . strftime('%A %d %B %Y') . "<br>";
    setlocale(LC_TIME, "fr_FR");
    echo "En Français: " . strftime('%A %d %B %Y') . "<br>";

    echo "<hr>";

    /*_______________________________________________ */


    echo "Objective N2: PHP String functions";
    echo "<br><br><br>";

    //1)
    $text1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit at imperdiet dui accumsan sit amet. Vitae tortor condimentum lacinia quis vel eros. Sed risus ultricies tristique nulla aliquet enim tortor. Maecenas ultricies mi eget mauris pharetra et ultrices. Condimentum lacinia quis vel eros donec. At tempor commodo ullamcorper a lacus. Dolor morbi non arcu risus quis varius quam quisque id. Massa eget egestas purus viverra accumsan. Et tortor consequat id porta nibh. Nisi vitae suscipit tellus mauris a diam maecenas. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis. Consequat semper viverra nam libero justo laoreet sit amet. Habitasse platea dictumst quisque sagittis purus sit amet. Sagittis purus sit amet volutpat consequat mauris nunc congue.";
    echo "This is our text: " . $text1;

    //2)
    echo "Number of characters in the previous text: " . strlen($text1);
    echo "<br><br>";

    //3)
    echo "Previous text with the upper letters: " . strtoupper($text1);
    echo "<br><br>";
    echo "Previous text with the upper letters(each word): " . ucwords($text1);
    echo "<br><br>";

    //4)
    echo "First 10 characters of the string: " . substr($text1, 0, 11);
    echo "<br><br>";
    echo "Last 10 characters of the string: " . substr($text1, strlen($text1) - 11, strlen($text1));
    echo "<br><br>";
    echo "Characters of the string from position 10 to 20: " . substr($text1, 10, 20);
    echo "<br><br>";

    //5)
    $text2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua";
    echo $text2 . "<br>";

    $chain1 = "" . $text2 . "<br>";
    echo $chain1 . "<br>";

    $leftText2 = ltrim($text2, "Habitasse platea dictumst quisque sagittis purus sit amet. Sagittis purus sit amet volutpat consequat mauris nunc congue.");
    echo $leftText2 . "<br>";

    $chain2 = "" . $leftText2 . "<br>";
    echo $chain2 . "<br>";

    $rightText2 = rtrim($text2, "Nisi vitae suscipit tellus mauris a diam maecenas.");
    echo $rightText2 . "<br>";

    $chain3 = "" . $rightText2 . "<br>";
    echo $chain3 . "<br>";

    echo "<br>";

    //6)
    //.........//

    echo "<hr>";

    /*_______________________________________________ */


    echo "Objective N3: PHP Arrays";
    echo "<br><br>";

    //1)
    $convertThis = "Okay, okay.Enough of that lorem ipsum thing.Some normal text over here";
    $myArray = explode(" ", $convertThis);

    echo "<pre>";
    print_r($myArray);
    echo "</pre>";
    echo count($myArray) . " number of elements<br>";
    asort($myArray, SORT_STRING);
    echo "<pre>";
    echo "By Ascending order: <br>";
    print_r($myArray);
    echo "NEW text from ascending array is: " . implode(" ", $myArray) . "<br>";
    echo "</pre>";
    arsort($myArray, SORT_STRING);
    echo "<pre>";
    echo "By Descending order: <br>";
    print_r($myArray);
    echo "New version of text from ascending array is: " . implode(" ", $myArray) . "<br>";
    echo "</pre>";

    //2
    echo "To be continued?Okay.So be it..";

    echo "<br><hr>";
    ?>



    <table>

        <?php

        /*_______________________________________________ */

        echo "Objective N4: PHP processing and HTML displayed results";
        echo "<br><br>";

        $pa = 10000;
        $r = 4 / 100 / 12;
        $n = 60;
        $dateSTR = strtotime("01-10-2019");
        $endingPrincipal = 9849.17;
        $m = round(($pa * $r) / (1 - pow((1 + $r), -$n)), 2);


        echo "<th>Month</th>\n";
        echo "<th>Date</th>\n";
        echo "<th>Principal</th>\n";
        echo "<th>Interest Payment</th>\n";
        echo "<th>Principal Payment</th>\n";
        echo "<th>Monthly Payment</th>\n";
        echo "<th>Ending Principal</th>\n";

        for ($i = 1; $i <= $n; $i++) {
            echo "<tr>\n";
            #Month Number
            echo "<td>" . $i . "</td>\n";

            #Date
            echo "<td>" . date("Y-m-d", $dateSTR) . "</td>\n";
            $dateSTR = strtotime("+1 month", $dateSTR);

            #Principal
            echo "<td>" . $pa . "</td>\n";

            #Interest Payment
            echo "<td>" . (round(($pa * $r), 2)) . "</td>\n";

            #Principal Payment
            echo "<td>" . ($m - (round(($pa * $r), 2))) . "</td>\n";

            #Monthly Payment
            echo "<td>" . $m . "</td>\n";

            #Endind Principal
            echo "<td>" . $endingPrincipal . "</td>\n";

            $pa = $endingPrincipal;
            $endingPrincipal = $pa - ($m - (round(($pa * $r), 2)));

            echo "</tr>";
        }
        ?>
    </table>


</body>


<footer>
  <p>Posted by: Fahmin Guliyev</p>
  <p>Contact information: <a href="mailto:fahmin.guliyev@ufaz.az">
  fahmin.guliyev@ufaz.az</a></p>
</footer>


</html>