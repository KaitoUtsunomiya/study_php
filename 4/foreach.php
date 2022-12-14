<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $a = [1, 2, 3];
            foreach($a as $b){
                print "$b<br>\n";
            }

            $shiki = array(
                "spr" => "春",
                "sum" => "夏",
                "aut" => "秋",
                "win" => "冬");

            foreach($shiki as $key => $value){
                print "$key is $value<br>\n";
            }
        ?>
    </body>
</html>
