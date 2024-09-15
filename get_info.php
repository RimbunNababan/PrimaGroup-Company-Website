<?php
header('Content-Type: application/json');

// Koneksi ke database
include 'koneksi.php';

// Ambil data dari query string
$blok = $_GET['blok'];

// Query database
$sql = "SELECT * FROM rumah WHERE blok_rumah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $blok);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Format harga dengan "Rp"
    $row['harga_jual'] = 'Rp ' . number_format($row['harga_jual'], 0, ',', '.');
    echo json_encode($row);
} else {
    echo json_encode([]);
}

$stmt->close();
$conn->close();
?>
