<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "46: Insert data into array in PHP"</title>
</head>
<body>
    <?php
    $data = array();
    $data[] = "Daniel";
    $data[] = 15;
    print_r($data);
    echo "<br />";

    $data2 = array();
    array_push($data2, "Daniel");
    array_push($data2, 10);
    print_r($data2);
    echo "<br />";

    $data3 = array("First", "Second");
    array_push($data3, "Daniel", "Alex", "Reza");
    print_r($data3);
    ?>
</body>
</html>