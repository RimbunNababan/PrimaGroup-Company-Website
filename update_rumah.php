<?php
include 'koneksi.php'; // Sambungkan ke database

// Ambil data dari form
$blok_rumah = $_POST['blok_rumah'];
$status = $_POST['status'];

// Debugging: tampilkan nilai yang diterima
echo "blok_rumah: $blok_rumah<br>";
echo "status: $status<br>";

if ($status !== 'cash' && $status !== 'kredit' && $status !== 'booking') {
    echo "Invalid status value.";
    exit;
}

// Query untuk update status rumah
$sql = "UPDATE rumah SET status = ? WHERE blok_rumah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $status, $blok_rumah);

if ($stmt->execute()) {
    echo "<script>alert('Status berhasil diupdate!'); window.location.href = 'datarumahdmr.php';</script>";
} else {
    echo "<script>alert('Error updating status: " . $stmt->error . "'); window.location.href = 'datarumahdmr.php';</script>";
}

$stmt->close();
$conn->close();
?>
