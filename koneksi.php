<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_produk";

$dbconnect = new mysqli($host, $user, $pass, $db);

if ($dbconnect->connect_error) {
    die("Koneksi gagal: " . $dbconnect->connect_error);
}
?>