<?php

use function PHPSTORM_META\elementType;

include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "40: What are Prepared Statements and how to use them"</title>
</head>
<body>

<?php
    $username = "Admin";
    $sql = "SELECT * FROM users WHERE user_uid=?;";
    // Create prepared statement
    $stmt = mysqli_stmt_init($conn);
    // Prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br />";
        }
    }
?>

</body>
</html>