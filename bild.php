<!DOCTYPE html>
<html>
    <head>
        <title><?php $Name; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <?php require 'parameter.php'; ?>
    </head>
    <?php require 'mysql.php'; ?>
    <body>
        <div>
            <?php
                $id = $_GET['id'];
                $row = getBild($id, $con);
                $bildsrc = $row['src'];
            ?>
            <img src="<?php echo $bildsrc; ?>" height="500px" />
            <?php goBack(); ?>
        </div>
    </body>
</html>
