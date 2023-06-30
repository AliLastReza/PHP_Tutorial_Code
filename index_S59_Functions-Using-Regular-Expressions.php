<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "59: Functions Using Regular Expressions"</title>
</head>
<body>
    <?php
    $myString = "My name is Daniel, Daniel is my name";

    if (preg_match("/Daniel/", $myString, $matches)) {
        print_r($matches);
    }

    echo "<br>";
    if (preg_match_all("/Daniel/", $myString, $allMatches)) {
        print_r($allMatches);
    }

    echo "<br>";
    $myString2 = preg_replace("/Daniel/", "John", $myString);
    echo $myString2;
    ?>
</body>
</html>