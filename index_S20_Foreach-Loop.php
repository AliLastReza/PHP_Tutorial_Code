<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "20: How to Create a Foreach Loop in PHP"</title>
    <style>
        body {
            font-family: Arial;
        }
    </style>
</head>

<body>
    <?php
    $students = array(array("Mohammad", false), array("Ali", true), array("Reza", true));
    foreach ($students as $student) {
        echo '- "' . $student[0] . '"<br />';
        $isPresent = $student[1];
        if ($isPresent) {
            echo '+ "Present 😃"<br /><br />';
        } else {
            echo '+ <br /><br />';
        }
    }
    ?>
</body>

</html>