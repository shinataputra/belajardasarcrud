<!-- Koneksi database -->

<?php
// Koneksi database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "dbbelajar";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}