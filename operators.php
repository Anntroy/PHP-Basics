<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <a href="index.php">
        <h4>Home</h4>
    </a>
    <?php
        echo "<h1 style='text-align: center'>Performing operations with operators in PHP</h1><br>";


        $example = ((3+2*5)-4/2)%5;
        echo "<details class='flex'>";
        echo "<summary>Create an example of use for arithmetic operators: +, -, *, /, and%</summary>";
        echo "<br><code><pre>
        \$example = ((3+2*5)-4/2)%5;<br>
        echo \$example;</pre></code>";
        echo "<p>Output:</p>";
        echo $example;
        echo "</details><br><br>";


        $dateTime = new DateTime();
        echo "<details class='flex'>";
        echo "<summary>Create a usage example for comparison operators: ==, !=, <,>, <=,> =</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();

        if((\$dateTime->format('H') == '06') && (\$dateTime->format('i') == '30' )){<br>
            echo 'Time to get up!';<br>
        } elseif ((\$dateTime->format('H') > '09') and ((\$dateTime->format('w')!='0') and (\$dateTime->format('w')!= '6'))){<br>
            echo 'You are too late!';<br>
        } else {<br>
            echo 'You can sleep some more!';<br>
        }`</code>";
        echo "<p>Output:</p>";

        if(($dateTime->format('H') == '06') && ($dateTime->format('i') == '30' )){
            echo "Time to get up!";
        } elseif (($dateTime->format('H') > '09') and (($dateTime->format('w')!='0') and ($dateTime->format('w')!= '6'))){
            echo "You are too late!";
        } else {
            echo "You can sleep some more!";
        }

        echo "</details><br><br>";


        $num1 = 10;
        $num2 = 7;
        echo "<details class='flex'>";
        echo "<summary>Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor</summary>";
        echo "<br><code><pre>
        \$num1 = 10;

        \$num2 = 7;

        if(\$num1 > 19 xor \$num2 == 17) {{<br>
            echo 'One of the condition is true.';<br>
        } else {<br>
            if(!(\$num1 > 19))<br>
                echo 'Both conditions are false.';<br>
            else<br>
                echo 'Both conditions are true.';<br>
            }<br></code>";
        echo "<p>Output:</p>";

        if($num1 > 19 xor $num2 == 17) {
            echo "One of the condition is true.";
        } else {
            if(!($num1 > 19))
                echo "Both conditions are false.";
            else
                echo "Both conditions are true.";
            }

        echo "</details><br><br>";
        ?>

</body>
</html>