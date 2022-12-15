<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>例外処理2</title>
    </head>
    <body>
        <?php
            function divnum($a, $b){
                try{
                    $c = $a / $b;
                }catch(Exception $e){
                    $c = "計算できません (" . $e->getMessage() . ")";
                }
                return $c;
            }

            function myErrorProc($errcode, $msg, $file, $line){
                if(!(error_reporting() & $errcode)){
                    return;
                }
                throw new ErrorException($msg, 0, $errcode, $file, $line);
            }

            set_error_handler("myErrorProc");
            $x = ($_POST["left"]);
            $y = ($_POST["right"]);
            $z = divnum($x, $y);
            print "$x / $y = $z \n";
        ?>
        <p><a href="reigai1.php">前のページに戻る</a></p>
    </body>
</html>