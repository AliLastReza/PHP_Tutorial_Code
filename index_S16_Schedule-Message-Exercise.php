<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "16: Exercise Using PHP | Scheduled Message Programming | PHP Tutorial | Learn PHP Programming"</title>
    <style>
        p {
            text-align: center;
            font-size: 120px;
            font-family: Arial;
            margin-top: 38vh;
        }
    </style>
</head>
<body>
    <?php
        $dayofweek = date("w");

        switch ($dayofweek) {
            case 1:
                echo "<p>It's Monday!</p>";
                break;
            case 2:
                echo "<p>It's Tuesday!</p>";
                break;
            case 3:
                echo "<p>It's Wednesday!</p>";
                break;
            case 4:
                echo "<p>It's Thursday!</p>";
                break;
            case 5:
                echo "<p>It's Friday!</p>";
                break;
            case 6:
                echo "<p>It's Saturday!</p>";
                break;
            case 0:
                echo "<p>It's Sunday!</p>";
                break;
        }
    ?>
</body>
</html>