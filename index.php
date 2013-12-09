<!--

    @author: Mert Basar, Carlos Rodriguez

-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
        <?php require 'parameter.php' ?>
        <title>MedienWeb</title>
        
        
    </head>
    <?php require 'mysql.php'; ?>
    <body>
        <h1>Rodriguez Basar Media Web Server</h1>
        
        <form method="GET" action="<?php $_SERVER['PHP_SELF']; ?>">
            <label for="search-basic"></label>
            <input type="search" name="search" id="search-basic" value="" />
        </form>
        
        <div data-role="collapsible-set" data-theme="c" data-content-theme="d">
            
            <div data-role="collapsible" data-collapsed="false">
                <h3>Bilder / Fotos</h3>
                <?php
                    if (isset($_GET['search'])) {
                        getResult("Name", "bild", $con);
                    }
                    else {
                        getContent("Name", "bild", $con);
                    }
                ?>
            </div>

            <div data-role="collapsible">
                <h3>Musik</h3>
                <?php
                    if (isset($_GET['search'])) {
                        getResult("Titel", "music", $con);
                    }
                    else {
                        getContent("Titel", "music", $con);
                    }
                ?>
            </div>
            
            <div data-role="collapsible">
                <h3>Filme / Videos</h3>
                <?php
                    if (isset($_GET['search'])) {
                        getResult("Name", "video", $con);
                    }
                    else {
                        getContent("Name", "video", $con);
                    }
                ?>
            </div>
        </div>
        <?php mysqli_close($con); ?>
    </body>
</html>
