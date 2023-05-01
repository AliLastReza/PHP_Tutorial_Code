<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of "15: Exercise Using PHP | Let's Build a Calculator | PHP Tutorial | Learn PHP Programming"</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="num1" placeholder="Number 1" />
        <select name="operator" id="operator">
            <option>Operator</option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <input type="text" name="num2" placeholder="Number 2" />
        <button name="submit" value="submit">Calculate</button>
    </form>
    <span>Result: </span>
    <?php
        if (isset($_GET['submit'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "Operator":
                    echo "Please select an operator.";
                    break;
                case "+":
                    echo $num1 + $num2;
                    break;
                case "-":
                    echo $num1 - $num2;
                    break;
                case "*":
                    echo $num1 * $num2;
                    break;
                case "/":
                    echo $num1 / $num2;
                    break;
            }
        }
     ?>
</body>
</html>