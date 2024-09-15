<?php
include 'koneksi.php';

$term = $_GET['term'];
$sql = "SELECT id_customer, nama FROM customer WHERE nama LIKE '%" . $term . "%' OR id_customer LIKE '%" . $term . "%' LIMIT 6";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
