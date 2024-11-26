<?php
// Konfigurasi database
$host = 'localhost'; // Server database
$user = 'root';      // User MySQL (default: root)
$password = '';      // Password MySQL (default kosong di XAMPP)
$dbname = 'pt.bendicar'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>
