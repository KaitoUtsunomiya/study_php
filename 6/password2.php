<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>パスワード確認画面</title>
    </head>
    <body>
        <?php
            $password = $_POST["pass"];
            if(preg_match("/^[a-z][a-z0-9_]{2,7}$/i", $password)){
                print "正しいパスワード形式です。<br>";
            }else{
                print "パスワードは正しい形式ではありません。<br>";
            }
        ?>
    </body>
</html>