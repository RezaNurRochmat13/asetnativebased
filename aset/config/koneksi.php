<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventarisz";
    mysql_connect( $hostname, $username, $password ) or die ("Unable to connect to database!");
    mysql_select_db( $dbname );
?>
