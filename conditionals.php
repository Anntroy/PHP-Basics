<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Conditionals</title>
</head>
<body>
    <a href="index.php">
        <h4>Home</h4>
    </a>
    <?php
        echo "<h2 style='text-align: center'>Performing conditionals in PHP</h2><br>";

        echo "<details class='flex'>";
        echo "<summary>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of 'We are on Monday'.</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();

        if(\$dateTime->format('w')=='1'){<br>
            echo 'We are on Monday';<br>
        } else {<br>
            echo 'We are not on Monday';<br>
        }</code>";
        echo "<p>Output:</p>";

        $dateTime = new DateTime();
        if($dateTime->format('w')=='1'){
            echo "We are on Monday";
        } else {
            echo "We are not on Monday";
        }

        echo "</details><br><br>";


        echo "<details class='flex'>";
        echo "<summary>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type 'We are in October'. Otherwise, if this condition is not met, show the current month in words as it come from DateTime.</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();

        if(\$dateTime->format('m')=='09'){<br>
            echo 'We are in October';<br>
        } else {<br>
            echo (\$dateTime->format('F'));<br>
        }</code>";
        echo "<p>Output:</p>";

        if($dateTime->format('m')=='09'){
            echo "We are in October";
        } else {
            echo ($dateTime->format('F'));
        }

        echo "</details><br><br>";


        echo "<details class='flex'>";
        echo "<summary>Create a double condition that evaluates: If the current minute is less than 10. Displays a message of type 'the current minute is less than 10', if the current minute is greater than 15, displays a message of the type 'the current minute is more than 15'. If you do not meet any of the two conditions above: Displays a message of the type 'does not meet any conditions'
        </summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();

        if(\$dateTime->format('i') < '10'){<br>
            echo 'the current minute is less than 10';<br>
        } elseif (\$dateTime->format('i') > '15') {<br>
            echo 'the current minute is more than 15';<br>
        } else {<br>
            echo 'does not meet any conditions';<br>
        }</code>";
        echo "<p>Output:</p>";

        if($dateTime->format('i') < '10'){
            echo 'the current minute is less than 10';
        } elseif ($dateTime->format('i') > '15') {
            echo 'the current minute is more than 15';
        } else {
            echo 'does not meet any conditions';
        }

        echo "</details><br><br>";


        echo "<details class='flex'>";
        echo "<summary>Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
        </summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();<br>
        \$currentDay = \$dateTime->format('w');

        switch($currentDay){<br>
            case '0':<br>
                echo 'Lets enjoy Sunday';<br>
                break;<br>
            case '1':<br>
                echo 'Lets start a week';<br>
                break;<br>
            case '2':<br>
                echo 'Today is a Tuesday';<br>
                break;<br>
            case '3':<br>
                echo 'Wednesday its not bad';<br>
                break;<br>
            case '4':<br>
                echo 'Tommorow is Friday';<br>
                break;<br>
            case '5':<br>
                echo 'Saturday is around the corner';<br>
                break;<br>
            case '6':<br>
                echo 'Starting a week end!';<br>
                break;<br>
        }</code>";
        echo "<p>Output:</p>";

        $currentDay = $dateTime->format('w');
        switch($currentDay){
            case '0':
                echo 'Lets enjoy Sunday';
                break;
            case '1':
                echo 'Lets start a week';
                break;
            case '2':
                echo 'Today is a Tuesday';
                break;
            case '3':
                echo "Wednesday it's not bad";
                break;
            case '4':
                echo 'Tommorow is Friday';
                break;
            case '5':
                echo 'Saturday is around the corner';
                break;
            case '6':
                echo 'Starting a week end!';
                break;
        }

        echo "</details><br><br>";
    ?>
</body>
</html>