<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "19: How to Create a For Loop in PHP"</title>
</head>

<body>
    <?php
    echo "Count 1 to 10.<br />";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br />";
    }

    echo "<br /><br />Write down even numbers between 0 to 10.<br />";
    for ($i = 0; $i <= 10; $i += 2) {
        echo $i . "<br />";
    }

    ?>
</body>

</html>