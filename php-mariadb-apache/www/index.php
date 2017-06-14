<?php

    $DBHOST = "db";
    $DBPORT = "3306";
    $DBNAME = "db1";
    $DBUSER = "root";
    $DBPASS = "test";

    $mysqli = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME, $DBPORT);

    $res = $mysqli->query("SELECT * FROM `test`");
    $row = mysqli_fetch_assoc($res);

    $greeting = $row["greeting"];
    echo "<h1>$greeting</h1>\n";

?>
