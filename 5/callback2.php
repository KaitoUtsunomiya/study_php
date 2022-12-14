<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            function callfunc(callable $f){
                $f();
                print "kaito";
            }

            callfunc(function(){
                print "Hello";
            })
        ?>
    </body>
</html>