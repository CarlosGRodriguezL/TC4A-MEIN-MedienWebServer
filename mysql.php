<?php 
    // Database implementation
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

    // Get content function
    function getContent($select, $type, $con) {
        $result = mysqli_query($con, "SELECT * FROM $type ORDER BY $select ASC");
        getArray($select, $result, $type);
    }

    // Search function
    function getResult($select, $type, $con) {
        $s = $_GET['search'];
        $result = mysqli_query($con, "SELECT * FROM  $type WHERE $select LIKE '%$s%' ORDER BY $select ASC") or die ("Error: " . mysqli_error($con));
        getArray($select, $result, $type);
    }
    
    // Print function
    function getArray($select, $result, $type) {
        while($row = mysqli_fetch_array($result)) {
            echo "<a href='" . $type . ".php?id=" . $row["ID"] . "'>" . $row["$select"] . "</a> - ";
            echo "<span style='font-weight:bold;'>Beschreibung / Kommentar: </span>" . $row['Beschreibung'] . "<br />";
        }
    }

    // Get Video function
    function getVideo($id, $con) {
        $result = mysqli_query($con, "SELECT * FROM video WHERE id = " . $id);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    // Get Bild function
    function getBild($id, $con) {
        $result = mysqli_query($con, "SELECT * FROM bild WHERE id = " . $id);
        $row = mysqli_fetch_array($result);
        return $row;
    }
    
    // Get Music function
    function getMusik($id, $con) {
        $result = mysqli_query($con, "SELECT * FROM music WHERE id = " . $id);
        $row = mysqli_fetch_array($result);
        return $row;
    }
    
    // Zurück Funktion
    function goBack() {
        echo "<br /><a href='javascript:history.back(1)'>Zur&uuml;ck</a>";
    }
?>