<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "18: What Is a Do While Loop in PHP"</title>
</head>

<body>
    <?php
    $x = 1;
    do {
        echo "Say hello at least once. x" . $x . "<br />";
        $x++;
    } while ($x <= 5)
    ?>
</body>

</html>