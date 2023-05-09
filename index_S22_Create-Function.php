<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "22: How to Create Your Own Function in PHP"</title>
</head>

<body>
    <?php
    $PERCENT = "percent";
    $AMOUNT = "amount";

    function calcCashBack($price, $cashBackType, $cashBackValue)
    {
        if ($cashBackType == $GLOBALS["PERCENT"]) {
            return $price * $cashBackValue * 0.01;
        } else if ($cashBackType == $GLOBALS["AMOUNT"]) {
            if ($price > $cashBackValue) {
                return $price - $cashBackValue;
            } else {
                return "(<em>ERROR: The cashback value was more than the price. It shouldn't be.</em>)";
            }
        }
    }

    function printPriceAndCashBack($price, $cashback)
    {
        echo "By buying $" . $price . " you'll get $" . $cashback . " cashback!<br />";
    }

    $p1 = 180;
    $cb1 = calcCashBack($p1, $PERCENT, 30);
    printPriceAndCashBack($p1, $cb1);

    $p2 = 120;
    $cb2 = calcCashBack($p2, $AMOUNT, 1);
    printPriceAndCashBack($p2, $cb2);

    $p3 = 20;
    $cb3 = calcCashBack($p3, $AMOUNT, 25);
    printPriceAndCashBack($p3, $cb3);

    ?>
</body>

</html>