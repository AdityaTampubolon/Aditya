<?php
include '../db/db_config.php';

// Tambahkan debug untuk koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Debug query
$username = "aditya";
$password = md5("041105");
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if (!$result) {
    die("Query gagal: " . $conn->error);
}
session_start();
include '../db/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Username atau password salah');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Login - Rental Mobil</title>
</head>
<body>
    <form method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
