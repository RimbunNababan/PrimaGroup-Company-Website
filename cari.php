<?php
include 'koneksi.php'; // Sambungkan ke database

// Ambil parameter 'term' dari permintaan GET
$term = isset($_GET['term']) ? $_GET['term'] : '';

if (!empty($term)) {
    $sql = "SELECT blok_rumah FROM rumah WHERE blok_rumah LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%$term%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    $results = array();
    while ($row = $result->fetch_assoc()) {
        $results[] = $row['blok_rumah'];
    }

    echo json_encode($results);

    $stmt->close();
}

$conn->close();
?>
