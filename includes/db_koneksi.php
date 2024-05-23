<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "myplanet";
$koneksi = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
    
?>