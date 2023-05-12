<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "26: POST and GET Superglobals in PHP"</title>
</head>

<body>
    <form method="GET">
        <input type="hidden" name="firstName" value="Ali" />
        <button type="submit">Submit through GET method</button>
    </form>
    <?php
    echo $_GET["firstName"];
    ?>
    <br />
    <br />
    <form method="POST">
        <input type="hidden" name="lastName" value="Reza" />
        <button type="submit">Submit through POST method</button>
    </form>
    <?php
    echo $_POST["lastName"];
    ?>
</body>

</html>