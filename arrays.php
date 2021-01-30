<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php
        echo "<h2 style='text-align: center'>Performing operations with arrays in PHP</h2><br>";
        $technologies = array("HTML", "CSS", "JavaScript");
        echo "<details class='flex'>";
        echo "<summary>Define a simple array composed of text strings</summary>";
        echo "<br><code><pre>
        \$technologies = array('HTML', 'CSS', 'JavaScript');</pre></code>";
        echo "<p>Output:</p>";
        print_r ($technologies);
        echo "</details><br><br>";

        $numbers = array(2.2, 34, 19, -7, 0);
        echo "<details class='flex'>";
        echo "<summary>Define a simple array consisting of whole numbers and decimal numbers</summary>";
        echo "<br><code><pre>
        \$numbers = array(2.2, 34, 19, -7, 0);</pre></code>";
        echo "<p>Output:</p>";
        print_r ($numbers);
        echo "</details><br><br>";

        $cars = array (
            array("Volvo",22,18),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );
        echo "<details class='flex'>";
        echo "<summary>Define a multidimensional array</summary>";
        echo "<br><code><pre>
        \$cars = array (array('Volvo',22,18), array('Saab',5,2), array('Land Rover',17,15));</pre></code>";
        echo "<p>Output:</p>";
        print_r ($cars);
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Execute the function that allows to obtain the length of an array</summary>";
        echo "<br><code><pre>
        \$numbers = array(2.2, 34, 19, -7, 0);<br>
        count(\$numbers);</pre></code>";
        echo "<p>Output:</p>";
        echo count($numbers);
        echo "</details><br><br>";

        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        echo "<details class='flex'>";
        echo "<summary>Execute the function that allows to obtain the combination of two arrays</summary>";
        echo "<br><code><pre>
        \$a = array('green', 'red', 'yellow');<br>
        \$b = array('avocado', 'apple', 'banana');<br>
        \$c = array_combine(\$a, \$b);<br>
        print_r(\$c);</pre></code>";
        echo "<p>Output:</p>";
        $c = array_combine($a, $b);
        print_r($c);
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Execute the function that once is given an array return the last element of it</summary>";
        echo "<br><code><pre>
        \$technologies = array('HTML', 'CSS', 'JavaScript');<br>
        end(\$technologies);</pre></code>";
        echo "<p>Output:</p>";
        echo end($technologies);
        echo "</details><br><br>";

        Array_push($technologies, 'PHP');
        echo "<details class='flex'>";
        echo "<summary>Execute the function that once is given an array add a new element to the array in question</summary>";
        echo "<br><code><pre>
        \$technologies = array('HTML', 'CSS', 'JavaScript');<br>
        Array_push(\$technologies, 'PHP');</pre></code>";
        echo "<p>Output:</p>";
        print_r($technologies);
        echo "</details><br><br>";
?>
</body>
</html>