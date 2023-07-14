<?php

if (!isset($_POST['submit'])) {
    header("Location: ../sign-up.php");
    exit();
}

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
