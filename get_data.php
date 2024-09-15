<?php
include 'koneksi.php'; // Sambungkan ke database

// Query untuk mengambil data dari tabel rumah
$sql = "SELECT blok_rumah, harga_jual, status, keterangan FROM rumah";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Mengirimkan data sebagai JSON
header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>
