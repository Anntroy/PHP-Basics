<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
    echo "<h1 style='text-align: center'>Performing operations with strings in PHP</h1><br>";

    echo "<details class='flex'>";
    echo "<summary>Print a text string</summary>";
    echo "<br><code><pre>
    echo 'Print a text string';</pre></code>";
    echo "<p>Output:</p>";
    echo "Print a text string";
    echo "</details><br><br>";

    $phrase = "this is a phrase from VARIABLE";
    echo "<details class='flex'>";
    echo "<summary>Print a text string that interpret variables</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    echo \$phrase;</pre></code>";
    echo "<p>Output:</p>";
    echo $phrase;
    echo "</details><br><br>";

    $name = "PHP";
    echo "<details class='flex'>";
    echo "<summary>Concatenate a previously declared variable in a text string</summary>";
    echo "<br><code><pre>
    \$name = 'PHP';<br>
    echo 'Welcome to '.\$name.'!';</pre></code>";
    echo "<p>Output:</p>";
    echo 'Welcome to '.$name.'!';
    echo "</details><br><br>";

    echo "<details class='flex'>";
    echo "<summary>Execute the function that allows you to transform a text string to lowercase</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    strtolower(\$phrase);</pre></code>";
    echo "<p>Output:</p>";
    echo strtolower($phrase);
    echo "</details><br><br>";

    echo "<details class='flex'>";
    echo "<summary>Execute the function that allows a text string to be capitalized</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    ucfirst(\$phrase);</pre></code>";
    echo "<p>Output:</p>";
    echo ucfirst($phrase);
    echo "</details><br><br>";

    echo "<details class='flex'>";
    echo "<summary>Execute the function that allows to obtain the length of a text string</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    strlen(\$phrase);</pre></code>";
    echo "<p>Output:</p>";
    echo strlen($phrase);
    echo "</details><br><br>";

    echo "<details class='flex'>";
    echo "<summary>Execute the function that allows you to replace text in a string (case sensitive)</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    str_replace('phrase', 'string', \$phrase);</pre></code>";
    echo "<p>Output:</p>";
    echo str_replace("phrase", "string", $phrase);
    echo "</details><br><br>";

    echo "<details class='flex'>";
    echo "<summary>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    str_ireplace('Phrase', 'string', \$phrase);</pre></code>";
    echo "<p>Output:</p>";
    echo str_ireplace("Phrase", "string", $phrase);
    echo "</details><br><br>";

    echo "<details class='flex'>";
    echo "<summary>Execute the function that allows to obtain a text substring from the position</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    substr(\$phrase, -8, 8);</pre></code>";
    echo "<p>Output:</p>";
    echo substr($phrase, -8, 8);
    echo "</details><br><br>";

    echo "<details class='flex'>";
    echo "<summary>Execute the function that allows you to write a text N times</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    str_repeat((substr(\$phrase, -9, 9)),4);</pre></code>";
    echo "<p>Output:</p>";
    echo str_repeat((substr($phrase, -9, 9)),4);
    echo "</details><br><br>";

    $pos = strpos($phrase, 'a');
    echo "<details class='flex'>";
    echo "<summary>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</summary>";
    echo "<br><code><pre>
    \$phrase = 'this is a phrase from VARIABLE';<br>
    \$pos = strpos(\$phrase, 'a');</pre></code>";
    echo "<p>Output:</p>";
    echo "The first letter 'a' in string variable has been found at $pos position";
    echo "</details><br><br>";
    ?>
</body>
</html>