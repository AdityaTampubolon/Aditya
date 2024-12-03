<?php
session_start();

// Jika user sudah login, arahkan ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: pages/dashboard.php");
    exit;
} else {
    // Jika belum login, arahkan ke halaman login
    header("Location: pages/login.php");
    exit;
}
?>