<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $kuji = mt_rand(1, 6);
            switch($kuji){
                case 1:
                    print "大吉";
                    break;
                case 2:
                    print "中吉";
                    break;
                case 3:
                    print "小吉";
                    break;
                case 4:
                    print "吉";
                    break;
                case 5:
                    print "末吉";
                    break;
                case 6:
                    print "凶";
                    break;
            }
        ?>
    </body>
</html>