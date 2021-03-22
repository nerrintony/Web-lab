<?php
    
    $dbhost = "localhost";
    $dbuname = "root";
    $dbpas = "";
    $dbDB = "abc";

    $con = mysqli_connect($dbhost,$dbuname,$dbpas,$dbDB);

    if(!$con)
    {
        echo "Error".mysqli_error;
    }
    else
    {
        echo "connected";
    }
?> 