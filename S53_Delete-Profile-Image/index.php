<?php
    session_start();
    include_once "dbh.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "53: Delete profile image using PHP"</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM user;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id';";
                $resultImg = mysqli_query($conn, $sqlImg);
                while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                    echo "<div>";
                    if ($rowImg['status'] == 0) {
                        $fileName = "uploads/profile" . $id . "*";
                        $file = glob($fileName);
                        $fileExt = explode(".", $file[0]);
                        $fileActualExt = end($fileExt);
                        echo '<img src="uploads/profile' . $id . '.' . $fileActualExt . '?'. mt_rand() . '">';
                    } else {
                        echo '<img src="uploads/Default-Profile-Image.png">';
                    }
                    echo $row['username'];
                    echo "</div>";
                }
            }
        } else {
            echo "There are no registered user yet!<br>";
        }

        if (isset($_SESSION["id"])) {
            if ($_SESSION['id'] === 1) {
                echo "You are logged in as user #1";
            }
            echo '<form action="upload.php" method="POST" enctype="multipart/form-data">
                      <input type="file" name="file">
                      <button type="submit" name="submit">Upload</button>
                  </form>';
            echo '<p>Delete Profile Image</p>
                  <form action="delete-profile-img.php" method="POST">
                      <button type="submit" name="submit">Delete</button>
                  </form>';
    } else {
            echo "you're not logged in!";
            echo '<form action="signup.php" method="POST">
                     <input type="text" name="first" placeholder="First name">
                      <input type="text" name="last" placeholder="Last name">
                      <input type="text" name="uid" placeholder="Username">
                      <input type="password" name="pwd" placeholder="password">
                      <button type="submit" name="submitSignup">Sign up</button>
                  </form>';
        }
    ?>
    <p>Login as user</p>
    <form action="login.php" method="POST">
        <button type="submit" name="submitLogin">Login</button>
    </form>

    <p>Logout user</p>
    <form action="logout.php" method="POST">
        <button type="submit" name="submitLogout">Logout</button>
    </form>
</body>
</html>