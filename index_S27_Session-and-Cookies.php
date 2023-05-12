<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "27: Session and Cookies in PHP"</title>
</head>

<body>
    <?php
    $day = 60 * 60 * 24;
    $month = $day * 30;

    setcookie("firstName", "Mohammad Ali", time() + $month);
    setcookie("nickName", "Ali", time() - 1);
    echo $_COOKIE["firstName"] . "<br />";
    echo $_COOKIE["nickName"] . "<br />";

    $_SESSION["userId"] = 110;
    echo $_SESSION["userId"] . "<br />";
    ?>
</body>

</html>