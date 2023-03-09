<?php

$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "php_crud"; // sesuaikan dengan nama databasenya
$koneksi    = mysqli_connect($server, $username, $password, $db); // pastikan urutan pemanggilan variabael nya sama.

// untuk cek jika koneksi gagal ke database
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
}

?>