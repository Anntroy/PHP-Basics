<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        echo "<h2 style='text-align: center'>Performing operations with dates in PHP</h2><br>";

        $dateTime = new DateTime();
        echo "<details class='flex'>";
        echo "<summary>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();<br>
        echo \$dateTime->format('Y-m-d');</pre></code>";
        echo "<p>Output:</p>";
        echo $dateTime->format('Y-m-d');
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Get the current date in any format</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();<br>
        echo \$dateTime->format('Y-m-d H:i:s');</pre></code>";
        echo "<p>Output:</p>";
        echo $dateTime->format('Y-m-d H:i:s');
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Get the current day</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();<br>
        echo \$dateTime->format('d');</pre></code>";
        echo "<p>Output:</p>";
        echo $dateTime->format('d');
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Get the current month in numerical format (1-12)</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();<br>
        echo \$dateTime->format('m');</pre></code>";
        echo "<p>Output:</p>";
        echo $dateTime->format('m');
        echo "</details><br><br>";

        echo "<details class='flex'>";
        echo "<summary>Get the current minute with leading zeros (00 - 59)</summary>";
        echo "<br><code><pre>
        \$dateTime = new DateTime();<br>
        echo \$dateTime->format('i');</pre></code>";
        echo "<p>Output:</p>";
        echo $dateTime->format('i');
        echo "</details><br><br>";
    ?>
</body>
</html>