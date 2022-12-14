<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $b = 1;
            for($a = 0; $a < 4; $a++){
                if($a + $b == 2){
                    continue;
                }else{
                    print "$a + $b = " . ($a + $b) . "<br>\n";
                }
            }
        ?>
    </body>
</html>