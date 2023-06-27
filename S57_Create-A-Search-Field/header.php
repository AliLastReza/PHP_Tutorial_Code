<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code of "57: How to create a search field with PHP and MySQLi"</title>
    <link href="bootstrap.min.css" rel="stylesheet">

    <style>
        /* .modal-sheet .modal-dialog {
            width: 395px;
            transition: bottom .75s ease-in-out;
        }

        html,
        body,
        #modalSignin {
            height: 100%;
        } */
    </style>
</head>

<body>
    <header class="p-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/php_course/S57_Create-A-Search-Field/" class="h2 d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none me-4">
                    <img src="php-logo.svg" alt="PHP logo" width="60"> Blog
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/php_course/S57_Create-A-Search-Field/" class="nav-link px-2 link-body-emphasis">Posts</a></li>
                </ul>

                <form action="search.php" method="GET" class="col-12 col-lg-6 mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" name="q" class="form-control" placeholder="Search In Posts..." aria-label="Search In Posts">
                </form>
            </div>
        </div>
    </header>