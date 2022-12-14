<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $num = 1000;
            print "$num は";
            if(0 <= $num && $num <= 9){
                print "1桁の数です。";
            }elseif(10 <= $num && $num <= 99){
                print "2桁の数です。";
            }elseif(100 <= $num && $num <= 999){
                print "3桁の数です。";
            }else{
                print "4桁以上です。";
            }
        ?>
        
    </body>
</html>
