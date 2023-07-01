<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "61: How to Create a Unique String in PHP"</title>
</head>

<body>
    <?php
    function createAnIdMethod1()
    {
        $idsLength = 8;
        $chars = "0123456789abcdefghijklmnopqrstuvwxyz()/$";
        $id = substr(str_shuffle($chars), 0, $idsLength);
        return $id;
    }
    echo createAnIdMethod1();
    echo "<br>";

    function createAnIdMethod2()
    {
        $id = uniqid("ord", true);
        return $id;
    }
    echo createAnIdMethod2();
    echo "<br>";

    function is_id_exists($conn, $id)
    {
        $query = "SELECT 1 FROM users where username = '$id'";
        $result = mysqli_query($conn, $query);
        $doseExists = mysqli_num_rows($result);
        return $doseExists;
    }

    function createAnIdMethod3()
    {
        $conn = mysqli_connect("localhost", "root", "", "php_unique_id");
        $notUnique = true;
        while ($notUnique) {
            $idsLength = 8;
            $chars = "0123456789abcdefghijklmnopqrstuvwxyz";
            $id = substr(str_shuffle($chars), 0, $idsLength);
            if (!is_id_exists($conn, $id)) {
                break;
            }
        }
        return $id;
    }
    echo createAnIdMethod3();
    ?>
</body>

</html>