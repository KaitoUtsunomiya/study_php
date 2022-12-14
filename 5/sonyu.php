<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            require "yomikomi.php";
            print "$a<br>";
            $a = "Hello";
            print "$a<br>";

            include_once "yomikomi2.php";
            print "$a<br>";
        ?>
    </body>
</html>