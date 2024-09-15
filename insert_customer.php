<?php
include 'koneksi.php'; // Sambungkan ke database

// Ambil data dari form
$id_customer = $_POST['id_customer'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

// Debugging: Tampilkan data yang diterima
error_log("Received data: ID: $id_customer, Name: $nama, Address: $alamat, Phone: $no_hp, Email: $email");

// Query untuk menyimpan data ke database
$sql = "INSERT INTO customer (id_customer, nama, alamat, no_hp, email) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $id_customer, $nama, $alamat, $no_hp, $email);

if ($stmt->execute()) {
    echo "Data berhasil ditambahkan";
} else {
    error_log("Database error: " . $stmt->error); // Debugging: Log error ke PHP error log
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
