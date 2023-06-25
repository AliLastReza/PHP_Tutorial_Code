<?php
session_start();
$userId = $_SESSION['id'];
$fileName = "uploads/profile" . $userId . "*";
$file = glob($fileName);
$fileExt = explode(".", $file[0]);
$fileActualExt = end($fileExt);
$actualFileName = "uploads/profile" . $userId . "." . $fileActualExt;

if (!unlink($actualFileName)) {
    echo "There was a error while deleting the profile image.";
} else {
    include_once "dbh.php";
    $sql = "UPDATE profileimg SET status = 1 WHERE userid = $userId;";
    mysqli_query($conn, $sql);
    header("Location: index.php?delete-pro-img=success");
}