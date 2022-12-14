<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $m = $_POST["money"];
            $r = $m - 120;
            $kouka = array(500, 100, 50, 10, 5, 1, 0);
            print "<p>入金金額は $m 円です。<br></p>\n";

            if($r < 0){
                print "<p>お金が足りません<br>\n";
            }elseif($m > 1000){
                print "<p>入金金額は1000円以内にしてください<br>\n";
            }elseif($r == 0){
                print "<p>ありがとうございました。お釣りはありません<br>\n";
            }else{
                print "<p>ありがとうございました。お釣りは $r 円です。<p>\n";
                print "<p>硬貨の枚数は以下の通りです。<br>\n";
                $n = 0;
                while($kouka[$n] > 0){
                    print $kouka[$n] . "円玉" . (int)($r / $kouka[$n]) . "枚<br>\n";
                    $r = $r % $kouka[$n];
                    $n++;
                }
            }
            print "</p>";
        ?>
        <p><a href="buy.php">お金を入れ直す</a></p>
    </body>
</html>