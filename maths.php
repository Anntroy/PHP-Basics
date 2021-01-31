<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <a href="index.php">
        <h4>Home</h4>
    </a>
    <?php
        echo "<h1 style='text-align: center'>Performing math operations in PHP</h1><br>";
        $num = abs(-48);
        echo "<details class='flex'>";
        echo "<summary>Define a variable whose value is the result of the function that returns an absolute value</summary>";
		echo "<br><code>\$num = abs(-48);</code>";
		echo "<p>Output: $num</p>";
        echo "</details><br>";

        $num = ceil(48.2);
        echo "<details class='flex'>";
        echo "<summary>Define a variable whose value is the result of the function that returns a ceiled value to the next highest integer</summary>";
		echo "<br><code>\$num = ceil(48.2);</code>";
		echo "<p>Output: $num</p>";
        echo "</details><br>";

        $max = max(48, 23, 92);
        echo "<details class='flex'>";
        echo "<summary>Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter</summary>";
		echo "<br><code>\$max = max(48, 23, 92);</code>";
		echo "<p>Output: $max</p>";
        echo "</details><br>";

        $min = min(48, 23, 92);
        echo "<details class='flex'>";
        echo "<summary>Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter</summary>";
		echo "<br><code>\$min = min(48, 23, 92);</code>";
		echo "<p>Output: $min</p>";
        echo "</details><br>";

        $rand = mt_rand();
        echo "<details class='flex'>";
        echo "<summary>Define a variable whose value is the result of the function that returns a random number</summary>";
		echo "<br><code>\$rand = rand();</code>";
		echo "<p>Output: $rand</p>";
		echo "</details><br>";
    ?>
</body>
</html>