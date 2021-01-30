<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterators</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        echo "<h2 style='text-align: center'>Performing iterations in PHP</h2><br>";

        echo "<details class='flex'>";
        echo "<summary>Generate a snippet that makes use of for</summary>";
        echo "<br><code><pre>
        for (\$i = 1; \$i <= 3; \$i++){<br>
            echo '\$i, ';<br>
        }</pre></code>";
        echo "<p>Output:</p>";
        for ($i = 1; $i <= 3; $i++){
            echo "$i, ";
        }
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Generate a snippet that makes use of foreach</summary>";
        echo "<br><code><pre>
        \$scores = [1,2,3];<br>
        foreach (\$scores as \$score) {<br>
            echo \$score.', ';<br>
        }</pre></code>";
        echo "<p>Output:</p>";
        $scores = [1,2,3];
        foreach ($scores as $score) {
            echo $score.', ';
        }
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Generate a snippet that uses while</summary>";
        echo "<br><code><pre>
        \$index = 1;<br>
        while (\$index <= 3) {<br>
            echo \$index.', ';<br>
            \$index ++;<br>
        }</pre></code>";
        echo "<p>Output:</p>";
        $index = 1;
        while ($index <= 3) {
            echo $index.', ';
            $index ++;
        }
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Generate a snippet that uses do while</summary>";
        echo "<br><code><pre>
        \$x = 1;<br>
        do {<br>
            echo 'The number is: \$x';<br>
            \$x++;<br>
        } while (\$x <= 3);</pre></code>";
        echo "<p>Output:</p>";
        $x = 1;
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 3);
        echo "</details><br><br>";
    ?>
</body>
</html>