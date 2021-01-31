<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <a href="index.php">
        <h4>Home</h4>
    </a>
    <h2 style='text-align: center'>Using functions in PHP</h2><br>
    <form action="functions.php" method="get">
        <label for="num1">First number:</label><br>
        <input type="number" step="0.1" name="num1"><br><br>
        <label for="num2">Second number:</label><br>
        <input type="number" step="0.1" name="num2"><br><br>
        <label for="operation">Choose the operation:</label><br>
        Add: <input type="radio" name="operation" value="+"><br>
        Mul: <input type="radio" name="operation" value="*"><br>
        Div: <input type="radio" name="operation" value="/"><br><br>
        <input type="submit" value="Calculate"><br><br>
    </form>
    <?php
        function getSum($num1, $num2){
            $sum = $num1 + $num2;
            return $sum;
        }
        function getMult($num1, $num2){
            $mult = $num1 * $num2;
            return $mult;
        }
        function getDiv($num1, $num2){
            $div = $num1 / $num2;
            return $div;
        }

        function performOperation($num1, $num2){

            $opp = $_GET["operation"];

            if ($opp === '+') {
                echo "The result of '$opp' operation is: ";
                echo getSum($num1, $num2);
            } elseif ($opp === '*') {
                echo "The result of '$opp' operation is: ";
                echo getMult($num1, $num2);
            } elseif ($opp === '/') {
                echo "The result of '$opp' operation is: ";
                echo getDiv($num1, $num2);
            } else {
                echo "Chose some operation";
                }

        }
        if ($_GET["num1"] and $_GET["num2"]){
            performOperation($_GET["num1"], $_GET["num2"]);
        }
        else {
            echo "Choose some numbers";
        }
    ?>
</body>
</html>