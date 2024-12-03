<?php
$host = "localhost";
$username = "root"; // Default username MySQL
$password = ""; // Default password MySQL (kosong di XAMPP)
$dbname = "rental_mobil"; // Pastikan nama database benar

$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
