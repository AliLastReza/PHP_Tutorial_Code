<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "48: Different types of array in PHP"</title>
</head>
<body>
    <?php
    // Indexed Arrays
    $data = array("Daniel", "John", "Jane");
    echo $data[0];

    // Associative Arrays
    $data = array("first" => "Daniel", "last" => "Nielsen", "age" => 25);
    echo $data["last"];

    // Multidimensional Arrays
    $data = array(array("Daniel", "Nielsen"), "John", "Jane");
    echo $data[0][0];
    ?>
</body>
</html>