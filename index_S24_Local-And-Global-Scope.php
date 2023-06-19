<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "24: Local and Global Scope in PHP"</title>
</head>

<body>
    <?php

    $x = 5;

    function something() {
        $y = 10;
    }

    echo $x;
    echo $y;

    ?>
</body>

</html>