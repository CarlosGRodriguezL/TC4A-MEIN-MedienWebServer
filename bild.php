<!DOCTYPE html>
<html>
    <head>
        <title><?php $Name; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <?php require 'parameter.php'; ?>
    </head
    <?php require 'mysql.php'; ?>
    <body>
        <div>
            <?php
            $id = $_GET['id'];
            $videoid = $id;
            $videosrc = getVideo($id, $con);
            ?>
            
        </div>
    </body>
</html>
