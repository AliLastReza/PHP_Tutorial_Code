<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code of "58: How to Create A PHP Contact Form"</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-icons.min.css">

    <style>
        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-top-width: medium;
            border-right-width: medium;
            border-bottom-width: medium;
            border-left-width: medium;
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
    </style>
</head>

<body>
    <header class="p-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/php_course/S58_Contact-Form/" class="h2 d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none me-4">
                    <img src="php-logo.svg" alt="PHP logo" width="60"> Blog
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/php_course/S58_Contact-Form/" class="nav-link px-2 link-body-emphasis">Contact Us</a></li>
                </ul>

                <form action="" method="GET" class="col-12 col-lg-6 mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" name="q" class="form-control" placeholder="Search In Posts..." aria-label="Search In Posts">
                </form>
            </div>
        </div>
    </header>
    <div class="b-example-divider"></div>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3 w-75 mx-auto">
            <h1 class="text-body-emphasis mb-4">Contact Us</h1>
            <form action="email-contact-form.php" method="POST" class="text-start mx-auto" style="width:35%;">

                <div class="mb-3">
                    <label for="formControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="formControlInput1" placeholder="Your Name">
                </div>

                <div class="mb-3">
                    <label for="formControlInput2" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="formControlInput2" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="formControlInput3" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" id="formControlInput3" placeholder="Donation :))">
                </div>

                <div class="mb-3">
                    <label for="formControlTextarea1" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="exampleFormControlTextarea2" placeholder="I Love U !!" rows="3"></textarea>
                </div>
                <div class="d-inline-flex gap-2 mb-3 w-100 mt-3">
                    <button name="contactSubmit" class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill mx-auto" type="submit">
                        <i class="bi bi-envelope-fill me-2"></i>
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="b-example-divider"></div>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>