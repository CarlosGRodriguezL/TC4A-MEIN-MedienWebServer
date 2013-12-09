<?php // Database implementation
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mediaweb";

        // Create connection
        $con = mysqli_connect($host, $username, $password, $dbname);

        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    ?>
    
    <?php // Get content function
    function getContent($select, $type, $con) {
        $result = mysqli_query($con, "SELECT * FROM $type");
        getArray($select, $result, $type);
    }
    ?>
    
    <?php // Search function
    function getResult($select, $type, $con) {
        $s = $_GET['search'];
        $result = mysqli_query($con, "SELECT * FROM $type WHERE $select LIKE '%$s%'") or die ("Error: " . mysqli_error($con));
        getArray($select, $result, $type);
    }
    ?>
    
    <?php // Print function
    function getArray($select, $result, $type) {
        while($row = mysqli_fetch_array($result)) {
            echo "<a href='" . $type . ".php?id=" . $row["ID"] . "'>" . $row["$select"] . "</a><p>" . $row['Beschreibung'] . "</p>";
        }
    }
    ?>

    <?php // Get video function
    function getVideo($id, $con){
        $result = mysqli_query($con, "SELECT * FROM video WHERE id = " . $id);
        $row = mysqli_fetch_array($result);
        return $row;
    }
    ?>

    <?php // Get video function
    function getMusik($id, $con){
        $result = mysqli_query($con, "SELECT * FROM music WHERE id = " . $id);
        $row = mysqli_fetch_array($result);
        return $row;
    }
    ?>
    