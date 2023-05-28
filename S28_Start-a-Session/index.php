<?php
include 'header.php';
?>
    <h1>
        <?php
        if (isset($_SESSION['username'])) {
            echo "Welcome Home " . $_SESSION['username'] . " 😃️<br />";
        } else {
            echo "Welcome STRANGER! 😐️<br />";
        }
        echo "Your Username: " . $_SESSION['username'];
        ?>
        </h1>
</body>
</html>