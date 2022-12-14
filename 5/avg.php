<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            function avg(...$param){
                $sum = 0;
                foreach ($param as $n){
                    $sum += $n;
                }
                return $sum / count($param);
            }
            print "20と30の平均値は" . avg(20, 30) . "<br>";
            print "25, 32, 50, 81の平均値は" . avg(25, 32, 50, 81) . "<br>";
        ?>
    </body>
</html>