<?php

$first = $_POST["first"];
$last = $_POST["first"];
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];

include_once 'dbh.php';
$sql = "INSERT INTO user (first, last, username, password)
        Values ('$first', '$last', '$uid', '$pwd');";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM user WHERE username = '$uid' AND first = '$first';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $userid = $row['id'];
        $sql = "INSERT INTO profileimg (userid, status)
                Values ('$userid', 1);";
        mysqli_query($conn, $sql);
        header("Location: index.php");
    }
} else {
    echo "An error occurred!";
}
