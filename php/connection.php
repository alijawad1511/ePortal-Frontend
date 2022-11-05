<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'eportal';

$connection = mysqli_connect($serverName,$username,$password,$dbName);

if(!$connection){
    echo '<script>alert("Connection to Database failed!")</script>';
}

echo '<script>alert("Connection to Database successful!")</script>';


?>