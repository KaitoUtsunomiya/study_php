<?php setcookie("val", 100); ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>クッキー1</title>
    </head>
    <body>
        <?php
            $getval = isset($_COOKIE["val"]) ? $_COOKIE["val"] : "(no)";
            print "ページ1の値は $getval です。<br>\n";
        ?>
        <p><a href="cookie2.php">ページ2へ</a></p>
    </body>
</html>