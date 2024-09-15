<?php
$servername = "localhost"; // Nama server
$username = "root";        // Nama pengguna database
$password = "";            // Kata sandi pengguna database
$dbname = "primagroup"; // Nama database yang digunakan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
