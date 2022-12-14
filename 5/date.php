<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            function addnum($a, $b){
                $x = $a + $b;
                return $x;
            }

            function funcnum($a){
                print "引数の値は $a";
                return;
            }

            function Hello(){
                print "Hello World!";
                return;
            }

            $a = addnum(1, 2);
            print "$a<br>\n";
            funcnum(2);
            Hello();

            $time = date("Y年m月j日 AH:i");
            print $time;
        ?>
    </body>
</html>