<?php
session_start();
$userid = $_SESSION['id'];

if (isset($_POST["submit"])) {
    $file = $_FILES["file"];
    $fileName = $file["name"];
    $fileSize = $file["size"];
    $fileTmpName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileType = $file["type"];
    // echo $fileSize;
    // exit();

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowedExts = array("jpg", "jpeg", "png", "pdf");
    if (in_array($fileActualExt, $allowedExts)) {
        if ($fileError === 0) {
            if ($fileSize < 2000001) {
                $newFileName = "profile" . $userid . "." . $fileActualExt;
                $fileDestination = "uploads/".$newFileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                include_once 'dbh.php';
                $sql = "UPDATE profileimg SET status = 0 WHERE userid = $userid;";
                mysqli_query($conn, $sql);
                header("Location: index.php?error=none&uploaded=yes");
                exit();
            } else {
                echo "File size should be less then 2 MB.";
            }
        } else {
            echo "There was an error while uploading the file.";
        }
    } else {
        echo "This file extension is not allowed.";
    }
} else {
    header("Location: index.php?error=notsubmitted");
    exit();
}
