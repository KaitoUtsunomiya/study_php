<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            for($i = 0; $i < 3; $i++){
                for($j = 0; $j < 3; $j++){
                    if($i + $j == 1){
                        break;
                    }else{
                        print "$i + $j = " . ($i + $j) . "<br>\n";
                    }
                }
            }
            for($i = 0; $i < 3; $i++){
                for($j = 0; $j < 3; $j++){
                    if($i + $j == 1){
                        break 2; 
                    }else{
                        print "$i + $j = " . ($i + $j) . "<br>\n";
                    }
                }
            }
        ?>
    </body>
</html>