<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "25: Different Superglobals in PHP"</title>
</head>

<body>
    <?php
    $x = 5;

    function someFunction() {
        $y = 10;
        echo "Print out global scope variable x value from local scope of someFunction: " . $GLOBALS["x"];
    }

    someFunction()
    ?>
</body>

</html>