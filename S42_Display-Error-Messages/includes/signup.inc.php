<?php

if (!isset($_POST['submit'])) {
    header("Location: ../index.php?signup=error");
    exit();
} else {
    include_once 'dbh.inc.php';
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../index.php?signup=empty");
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../index.php?signup=invalid_char&email=$email&uid=$uid");
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index.php?signup=invalid_email&first=$first&last=$last&uid=$uid");
                exit();
            } else {
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                VALUES (?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed";
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
                    mysqli_stmt_execute($stmt);
                }
                header("Location: ../index.php?signup=success");
                exit();
            }
        }
    }
}


