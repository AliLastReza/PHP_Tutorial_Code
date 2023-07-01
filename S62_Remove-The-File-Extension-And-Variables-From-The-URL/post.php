<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code of "62: How to Remove the File Extension and Variables From the URL"</title>
    <link href="/php_course/S62_Remove-The-File-Extension-And-Variables-From-The-URL/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="p-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/php_course/S62_Remove-The-File-Extension-And-Variables-From-The-URL/" class="h2 d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none me-4">
                    <img src="/php_course/S62_Remove-The-File-Extension-And-Variables-From-The-URL/php-logo.svg" alt="PHP logo" width="60"> Blog
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/php_course/S62_Remove-The-File-Extension-And-Variables-From-The-URL/" class="nav-link px-2 link-body-emphasis">Posts</a></li>
                </ul>

                <form action="" method="GET" class="col-12 col-lg-6 mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" name="q" class="form-control" placeholder="Search In Posts..." aria-label="Search In Posts">
                </form>
            </div>
        </div>
    </header>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <article class="blog-post">
                    <?php
                    $id = $_GET["id"];
                    $title = $_GET["title"];
                    echo '<h2 class="display-5 link-body-emphasis mb-1">Post Title: ' . $title . '</h2>
                    <p>Post ID: ' . $id . '</p>';
                    ?>
                </article>
            </div>
            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Recent posts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"></rect>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"></rect>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"></rect>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                        <small class="text-body-secondary">January 13, 2023</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/php_course/S62_Remove-The-File-Extension-And-Variables-From-The-URL/bootstrap.bundle.min.js"></script>
</body>

</html>