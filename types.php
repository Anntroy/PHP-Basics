<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <a href="index.php">
        <h4>Home</h4>
    </a>
    <?php
        echo "<h2 style='text-align: center'>Define a new variable and assign a value to each of the following types:</h2><br>";

        $boolean =false;
        $boolean1 = true;
        echo "<details class='flex'>";
        echo "<summary>Boolean</summary>";
        echo "<br><code><pre>
        \$boolean =false;<br>
        \$boolean1 = true;<br>
        echo 'Echo value for true variable - \$boolean1 and get value using var_dump function for false variable -';<br>
        var_dump(\$boolean);
        </pre></code>";
        echo "<p>Output:</p>";
        echo "<p>Echo value for true variable - $boolean1 and get value using var_dump function for false variable - </p>";
        var_dump($boolean);
        echo "</details><br><br>";

        $integer = 30;
        echo "<details class='flex'>";
        echo "<summary>Integer</summary>";
        echo "<br><code><pre>
        \$integer = 30;<br>
        print_r (\$integer);
        </pre></code>";
        echo "<p>Output:</p>";
        print_r ($integer);
        echo "</details><br><br>";

        $float = 30.4;
        echo "<details class='flex'>";
        echo "<summary>Float</summary>";
        echo "<br><code><pre>
        \$float = 30.4;<br>
        print_r (\$float);
        </pre></code>";
        echo "<p>Output:</p>";
        print_r ($float);
        echo "</details><br><br>";

        $string = "This is a string";
        echo "<details class='flex'>";
        echo "<summary>String</summary>";
        echo "<br><code><pre>
        \$string = 'This is a string';<br>
        print_r (\$string);
        </pre></code>";
        echo "<p>Output:</p>";
        print_r ($string);
        echo "</details><br><br>";

        $technologies = array("HTML", "CSS", "JavaScript");
        echo "<details class='flex'>";
        echo "<summary>Array</summary>";
        echo "<br><code><pre>
        \$technologies = array('HTML', 'CSS', 'JavaScript');<br>
        print_r (\$technologies);</pre></code>";
        echo "<p>Output:</p>";
        print_r ($technologies);
        echo "</details><br><br>";

        class Book {
            public $title;
            public $pages;

            function set_title($title) {
                $this->title = $title;
            }
            function get_title() {
                return $this->title;
            }
            function set_pages($pages) {
                $this->pages = $pages;
            }
            function get_pages() {
                return $this->pages;
            }
        }

        $book = New Book;
        $book->set_title("Harry Potter");
        $book->set_pages("400");

        echo "<details class='flex'>";
        echo "<summary>Object</summary>";
        echo "<br><code><pre>
        \$book = New Book;<br>
        \$book->set_title('Harry Potter');<br>
        \$book->set_pages('400');<br>
        print_r (\$book);</pre></code>";
        echo "<p>Output:</p>";
        print_r ($book);
        echo "</details><br><br>";

        $null = null;
        echo "<details class='flex'>";
        echo "<summary>Null</summary>";
        echo "<br><code><pre>
        \$null = null;<br>
        var_dump(\$null);
        </pre></code>";
        echo "<p>Output:</p>";
        var_dump($null);
        echo "</details><br><br>";
    ?>
</body>
</html>