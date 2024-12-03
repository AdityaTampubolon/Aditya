<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard - Rental Mobil</title>
</head>
<body>
    <h1>Selamat Datang, <?= $_SESSION['username']; ?></h1>
    <a href="add_cars.php">Tambah Mobil</a>
    <a href="list_cars.php">Daftar Mobil</a>
    <a href="logout.php">Logout</a>
</body>
</html>
