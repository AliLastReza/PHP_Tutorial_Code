<?php
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "47: Inserting database results into array in PHP"</title>
</head>
<body>
<h1>Our website's Users' Names with their usernames!</h1>
<ul>

<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $rows = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }

    foreach($rows as $user) {
        echo "<li>". $user["usersName"] . " (" . $user["usersUid"] . ")</li>";
    }
?>

</ul>
</body>
</html>