<?php

$server_n='localhost';
$u_name='root';
$pass='';
$db='emp';

$conn=mysqli_connect($server_n,$u_name,$pass,$db);

if(!$conn)
{
    die('Could not connect' .mysqli_error());
}

else{
    echo "datbase connected";
}
?>