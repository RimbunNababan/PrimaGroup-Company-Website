<?php
include 'koneksi.php'; // Sambungkan ke database

// Ambil data JSON yang dikirim dari AJAX
$data = json_decode(file_get_contents('php://input'), true);

foreach ($data as $item) {
    $blok_rumah = $item['blok_rumah'];
    $status = $item['status'];
    
    // Query untuk memasukkan data ke tabel rumah
    $stmt = $conn->prepare("INSERT INTO rumah (blok_rumah, harga_jual, status, keterangan) VALUES (?, 0, ?, '-')");
    $stmt->bind_param("ss", $blok_rumah, $status);

    if (!$stmt->execute()) {
        echo "Terjadi kesalahan: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>
