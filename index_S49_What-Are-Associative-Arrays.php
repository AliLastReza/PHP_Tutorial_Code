<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "49: What are associative arrays in PHP"</title>
</head>

<body>
    <?php
    $data = array(
        "first" => "Daniel",
        "last" => "Nielsen",
        "age" => 25
    );
    echo $data["first"];

    $data2["first"] = "Daniel";
    $data2["last"] = "Nielsen";
    $data2["age"] = 25;
    echo $data["age"];
    ?>
</body>

</html>