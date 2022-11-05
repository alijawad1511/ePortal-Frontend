<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'ePortal';

$connection = mysqli_connect($serverName,$username,$password,$dbName);

if(!$connection){
    echo '<script>alert("Connection to Database failed!")</script>';
}


?>