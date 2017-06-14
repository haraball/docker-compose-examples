<?php 
    phpinfo(); 

    $DBSERVER = "localhost"; 
	$DBNAME = "database";
	$DBUSER = "root";
	$DBPASS = "test";

    $LINK = mysqli_connect($DBSERVER, $DBUSER, $DBPASS);
	mysqli_select_db($LINK, $DBNAME);

    $row = mysqli_query("select * `test`")->fetch_assoc();

    echo $row["greeting"];

?>
