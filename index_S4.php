<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "4: How to Create PHP Variables | PHP Tutorial | Learn PHP Programming | PHP for Beginners"</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>
    <?php
        $name = $_GET['person'];
        echo $name." is a handsome man.";
     ?>
</body>
</html>