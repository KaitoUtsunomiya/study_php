<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            function Hello(){
                print "こんにちは";
            }
            function callfunc(callable $f){
                $f();
                print "kaito";
            }
            callfunc("Hello");
        ?>
    </body>
</html>