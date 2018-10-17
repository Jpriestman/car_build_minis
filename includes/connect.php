<?php
$user = "root";
$password = "root"; //windows users leave blank
$host = "localhost";
$db = "week_8";

$conn = mysqli_connect($host, $user, $password, $db;
                          
if (!$conn) {
    echo "connection didn't work....";
    exit;
}

?>
