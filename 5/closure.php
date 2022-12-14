<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $a = "Hello";
            $b = "Kaito";

            function func1($p){
                global $b;
                print $p;
                print $b;
            }
            func1($a);

            print "<br>";

            $func2 = function($p) use ($b){
                print $p;
                print $b;
            };
            $func2($a);
        ?>
    </body>
</html>