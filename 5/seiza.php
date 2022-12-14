<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>12星座調べ</title>
    </head>
    <body>
        <form action="seiza.php" method="post">
            <p>
                星座を調べます。<br>
                誕生日を半角数字で入力してください。<br>
                <input type="text" name="month">月
                <input type="text" name="day">日
                <input type="submit" value="検索">
            </p>
            <?php
                function seiza($a, $b){
                    if ((($a == 3) && (21 <= $b && $b <= 31)) || (($a == 4) && (1 <= $b && $b <= 20))){
                        return "牡羊座";
                    }elseif((($a == 4) && (21 <= $b && $b <= 30)) || (($a == 5) && (1 <= $b && $b <= 21))){
                        return "牡牛座";
                    }else{
                        return "search by yourself";
                    }
                }

                $m = isset($_POST["month"]) ? $_POST["month"] : "";
                $d = isset($_POST["day"]) ? $_POST["day"] : "";

                if($m && $d){
                    $s = seiza($m, $d);
                    print $s;
                }
            ?>
        </form>
    </body>
</html>