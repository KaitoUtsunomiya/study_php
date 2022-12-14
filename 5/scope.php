<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $x = 2; $y = 2;

            function funcscope(){
                $x = 0;
                global $y;
                static $z = 1;
                $x++; $y++; $z++;
                print "\$x = $x, \$y = $y, \$z = $z <br>";
            }
            funcscope();
            funcscope();
            print "\$x = $x, \$y = $y";
        ?>
    </body>
</html>