<?php
session_start();
include '../db/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price_per_day = $_POST['price_per_day'];

    $query = "INSERT INTO cars (name, brand, price_per_day) VALUES ('$name', '$brand', '$price_per_day')";
    if ($conn->query($query)) {
        echo "<script>alert('Mobil berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Gagal menambahkan mobil.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Tambah Mobil</title>
</head>
<body>
    <form method="POST">
        <h2>Tambah Mobil</h2>
        <input type="text" name="name" placeholder="Nama Mobil" required>
        <input type="text" name="brand" placeholder="Brand" required>
        <input type="number" name="price_per_day" placeholder="Harga per Hari" required>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
