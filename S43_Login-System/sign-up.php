<?php
include 'header.php';
?>

<style>
    #modalSignin {
        height: auto;
    }
</style>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="includes/signup.inc.php" method="post" data-bitwarden-watching="1">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control rounded-3" id="nameInput" placeholder="Name">
                        <label for="nameInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control rounded-3" id="emailInput" placeholder="Email Address">
                        <label for="emailInput">Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="uid" class="form-control rounded-3" id="usernameInput" placeholder="Username">
                        <label for="usernameInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="pwd" class="form-control rounded-3" id="pwdInput" placeholder="Password">
                        <label for="pwdInput">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="pwdrepeat" class="form-control rounded-3" id="pwdRepeat" placeholder="Repeat Password">
                        <label for="pwdRepeat">Repeat Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Sign up</button>
                    <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                </form>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinputs") {
                        echo "<p class='text-center mt-2 text-danger'>Fill in all fields.</p>";
                    }
                    if ($_GET["error"] == "invaliduid") {
                        echo "<p class='text-center mt-2 text-danger'>Enter a proper username.</p>";
                    }
                    if ($_GET["error"] == "invalidemail") {
                        echo "<p class='text-center mt-2 text-danger'>Enter a proper email address.</p>";
                    }
                    if ($_GET["error"] == "pwdsnotmatch") {
                        echo "<p class='text-center mt-2 text-danger'>Passwords don't match!</p>";
                    }
                    if ($_GET["error"] == "uidtaken") {
                        echo "<p class='text-center mt-2 text-danger'>Username or Email already taken!</p>";
                    }
                    if ($_GET["error"] == "none") {
                        echo "<p class='text-center mt-2 text-success'>You have signed up!</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>