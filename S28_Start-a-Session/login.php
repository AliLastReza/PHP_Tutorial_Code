<?php
include 'header.php';
?>
    <?php
    $myUsername = "alilastreza";
    $_SESSION['username'] = $myUsername;
    echo "<h1>You've logged in as " . $_SESSION['username'] . "</h1>"
    ?>
    </body>
</html>