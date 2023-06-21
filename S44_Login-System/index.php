<?php
    include 'header.php';
?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 border-bottom-0">
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo '<h1 class="fw-bold fs-2">Welcome Home ' . $_SESSION["useruid"] . ' 😃</h1>';
                } else {
                    echo '<h1 class="fw-bold fs-2">Welcome Home 😃</h1>';
                }
                ?>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>