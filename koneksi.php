<?php
$host = "localhost";     
$user = "root";            
$pass = "";                
$db   = "PIBS";            

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Menangani jika koneksi gagal
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>