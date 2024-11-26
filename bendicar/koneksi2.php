<?php
// Termasuk file koneksi
include 'koneksi.php';

// Query ke database
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Cek jika ada hasil
if ($result->num_rows > 0) {
    echo "<h1>Data User</h1>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['email'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

// Tutup koneksi
$conn->close();
?>
