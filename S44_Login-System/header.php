<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code of "How To Create A Login System In PHP For Beginners"</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .modal-sheet .modal-dialog {
            width: 395px;
            transition: bottom .75s ease-in-out;
        }

        html,
        body,
        #modalSignin {
            height: 100%;
        }
    </style>
</head>

<body>
    <header class="p-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/php_course/S43_Login-System/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none me-4">
                    <img src="assets/images/php-logo.svg" alt="PHP logo" width="60">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/php_course/S43_Login-System/" class="nav-link px-2 link-secondary">Overview</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Inventory</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Customers</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <?php
                if (isset($_SESSION["useruid"])) {
                    echo '
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
                        </a>
                        <ul class="dropdown-menu text-small" style="">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="includes/logout.inc.php">Log out</a></li>
                        </ul>
                    </div>';
                } else {
                    echo '
                    <ul class="nav">
                        <li class="nav-item"><a href="login.php" class="nav-link link-body-emphasis px-2">Login</a></li>
                        <li class="nav-item"><a href="sign-up.php" class="nav-link link-body-emphasis px-2">Sign up</a></li>
                    </ul>';
                }
                ?>
            </div>
        </div>
    </header>