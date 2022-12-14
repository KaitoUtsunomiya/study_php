<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $a = 5;
            while($a > 0){
                print "Hello.$a<br>\n";
                $a--;
            }

            $s = $i = 0;
            do{
                $i = ++$i;
                $s = $s + $i;
            }while($i < 10);
            print "the sum of 1 to $i is $s";
        ?>
    </body>
</html>