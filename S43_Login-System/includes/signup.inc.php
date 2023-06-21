<?php

if (!isset($_POST['submit'])) {
    header("Location: ../sign-up.php");
    exit();
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if (emptyInputSignUp($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../sign-up.php?error=emptyinputs");
        exit();
    }
    if (InvalidUid($username) !== false) {
        header("location: ../sign-up.php?error=invaliduid");
        exit();
    }
    if (InvalidEmail($email) !== false) {
        header("location: ../sign-up.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../sign-up.php?error=pwdsnotmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../sign-up.php?error=uidtaken");
        exit();
    }

    create_user($conn, $name, $email, $username, $pwd);

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


