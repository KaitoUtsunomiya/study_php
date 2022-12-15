<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            if(move_uploaded_file($_FILES["upfile"]["tmp_name"], "./".$_FILES["upfile"]["name"]) == FALSE){
                print "false<br>";
            }else{
                print ($_FILES["upfile"]["name"]);
                print "をアップロードしました。";
            }
        ?>
    </body>
</html>