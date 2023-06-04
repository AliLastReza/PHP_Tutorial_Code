<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "42: How to Display Error Messages Using PHP"</title>
    <style>
        .error {
            color:red;
        }
        .success {
            color:forestgreen;
        }
    </style>
</head>
<body>
<form action="includes/signup.inc.php" method="POST">
    <?php
    if (isset($_GET["first"])) {
        echo '<input type="text" name="first" placeholder="First Name" value="'. $_GET["first"] .'"/><br />';
    } else {
        echo '<input type="text" name="first" placeholder="First Name" /><br />';
    }

    if (isset($_GET["last"])) {
        echo '<input type="text" name="last" placeholder="Last Name" value="'. $_GET["last"] .'"/><br />';
    } else {
        echo '<input type="text" name="last" placeholder="Last Name" /><br />';
    }

    if (isset($_GET["email"])) {
        echo '<input type="text" name="email" placeholder="Email" value="'. $_GET["email"] .'"/><br />';
    } else {
        echo '<input type="text" name="email" placeholder="Email" /><br />';
    }

    if (isset($_GET["uid"])) {
        echo '<input type="text" name="uid" placeholder="Username" value="'. $_GET["uid"] .'"/><br />';
    } else {
        echo '<input type="text" name="uid" placeholder="Username" /><br />';
    }

    if (isset($_GET["pwd"])) {
        echo '<input type="password" name="pwd" placeholder="Password" value="'. $_GET["pwd"] .'"/><br />';
    } else {
        echo '<input type="password" name="pwd" placeholder="Password" /><br />';
    }
    ?>

    <button type="submit" name="submit">Sign Up</button>

    <?php
    /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "signup=empty") == true) {
        echo "<p class='error'>Please fill up   all fields.</p>";
    }
    elseif (strpos($fullUrl, "signup=invalid_char") == true) {
        echo "<p class='error'>You used invalid characters in first name or/and last name.</p>";
    }
    elseif (strpos($fullUrl, "signup=invalid_email") == true) {
        echo "<p class='error'>Please enter a valid email.</p>";
    }
    elseif (strpos($fullUrl, "signup=success")) {
        echo "<p class='success'>You signed up successfully :)</p>";
    }*/

    if (!isset($_GET["signup"])) {
        exit();
    } else {
        $signupCheck = $_GET["signup"];
        if ($signupCheck == "empty") {
            echo "<p class='error'>Please fill up   all fields.</p>";
        }
        elseif ($signupCheck == "invalid_char") {
            echo "<p class='error'>You used invalid characters in first name or/and last name.</p>";
        }
        elseif ($signupCheck == "invalid_email") {
            echo "<p class='error'>Please enter a valid email.</p>";
        }
        elseif ($signupCheck == "success") {
            echo "<p class='success'>You signed up successfully :)</p>";
        }
    }
    ?>
</form>
</body>
</html>