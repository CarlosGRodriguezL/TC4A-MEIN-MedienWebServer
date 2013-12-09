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
            $musikid = $id;
            $row = getMusik($id, $con);
            $musiksrc = $row['src'];
            
            ?>
            <audio controls>
                <source src="horse.ogg" type="<?php echo $musiksrc ?>">
                <source src="horse.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </body>
</html>


