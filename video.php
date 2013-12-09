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
        <div data-theme="b">
            <?php
                $id = $_GET['id'];
                $row = getVideo($id, $con);
                $videosrc = $row['src'];
            ?>
            
            <video id="<?php echo $id; ?>" class="video-js vjs-default-skin" controls preload="auto" width="640" height="264" data-setup='{"example_option":true}'>
                <source src="<?php echo $videosrc; ?>" type="video/mp4" />
            </video>
            <?php goBack() ?>
        </div>
    </body>
</html>
