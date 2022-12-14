<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            function reading($who, $what){
                print "$who は$what を読んでいます<br>";
            }
            reading("私", "PHPの絵本");

            $book = ["彼女", "Cの絵本"];
            reading(...$book);
        ?>
    </body>
</html>