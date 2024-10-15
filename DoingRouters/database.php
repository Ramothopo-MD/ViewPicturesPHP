<?php
$dbhost = 'localhost';
$dbusername = "root";
$dbpass = "";
$dbname = 'memoriesdb';

$conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname);

if (!$conn) {
   
    die($conn);
   
}
