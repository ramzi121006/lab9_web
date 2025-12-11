<?php
// config/database.php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab9_php_modular";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>