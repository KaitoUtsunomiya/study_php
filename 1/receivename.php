<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>sendname</title>
    </head>
    <body>
        <?php
            $name = $_REQUEST["name"];
            print "my name is \"" . $name . "\".<br>\n";
            var_dump($_REQUEST);
            var_dump($_SERVER);
        ?>
    </body>
</html>
