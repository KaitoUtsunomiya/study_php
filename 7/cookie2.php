<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>クッキー2</title>
    </head>
    <body>
        <?php
            $getval = isset($_COOKIE["val"]) ? $_COOKIE["val"] : "(no)";
            print "ページ2の値は $getval です。<br>\n";
        ?>
        <p><a href="cookie1.php">ページ1</a></p>
    </body>
</html>