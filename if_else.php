<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $a = 65;
            print "あなたの得点は $a 点です<br>\n";
            
            if($a < 70){
                print "平均まであと" . (70 - $a) . "点です<br>\n";
                print "がんばりましょう<br>\n";
            }else{
                print "よくできました";
            }
        ?>
        
    </body>
</html>
