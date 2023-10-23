<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(!$conn) {
    echo "Failed to connect database";
}

?>