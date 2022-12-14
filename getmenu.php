<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            function getmenu1($a){
                $a = "Coffee";
                print "$a<br>";
            }

            function getmenu2(&$a){
                $a = "Coffee";
                print "$a<br>";
            }

            function getmenu3($a = "Drink"){
                print "$a<br>";
            }

            function getmenu4($a, $b = "Drink"){
                print "$a<br>";
                print "$b<br>";
            }

            function getmenu5($a = "Drink", $b){
                print "$a<br>";
                print "$b<br>";
            }

            print "getmenu1<br>";
            $a = "Tea";
            print "$a<br>";
            getmenu1($a);
            print "$a<br>";

            print "getmenu2<br>";
            $b = "Tea";
            print "$b<br>";
            getmenu2($b);
            print "$b<br>";

            print "getmenu3<br>";
            getmenu3("Tea");
            getmenu3();

            print "getmenu4<br>";
            getmenu4("Tea");

            print "getmenu5<br>";
            getmenu5("Tea", "Coffe");
            getmenu5("Tea");


        ?>
    </body>
</html>