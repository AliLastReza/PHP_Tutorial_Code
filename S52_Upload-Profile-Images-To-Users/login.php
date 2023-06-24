<?php

if (isset($_POST["submitLogin"])) {
    session_start();
    $_SESSION["id"] = 1;
    header("Location: index.php");
}