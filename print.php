<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        echo "<h1 style='text-align: center'>Performing print operations in PHP</h1><br>";
        echo "<details class='flex'>";
        echo "<summary>Generate an instruction that makes use of 'echo'</summary>";
        echo "<br><code><pre>
        echo 'Hello PHP';</pre></code>";
        echo "<p>Output: </p>";
        echo 'Hello PHP';
        echo "</details><br>";

        $a = array ('a' => 'HTML', 'b' => 'CSS', 'c' => array ('GET', 'POST', 'PATCH'));
        echo "<details class='flex'>";
        echo "<summary>Generate an instruction that makes use of 'print'</summary>";
        echo "<br><code><pre>
        print ('My web in PHP \$a');</pre></code>";
        echo "<p>Output:</p>";
        print ("My web in PHP $a");
        echo "</details><br>";

        echo "<details class='flex'>";
        echo "<summary>Generate an instruction that makes use of 'print_r'</summary>";
        echo "<br><code><pre>
        print_r (\$a);</pre></code>";
        echo "<p>Output: </p>";
        print_r ($a);
        echo "</details><br>";
    ?>
</body>
</html>