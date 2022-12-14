<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $b = 2;
            for($a = 0; $a <5; $a++){
                if($b -$a == 0){
                    break;
                }else{
                    print "$b - $a = " . ($b - $a) . "<br>\n"; 
                }
            }
        ?>
    </body>
</html>