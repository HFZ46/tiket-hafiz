<?php
include 'koneksi.php';

$query = isset($_GET['q']) ? $_GET['q'] : '';
$query = mysqli_real_escape_string($conn, $query);

$sql = "SELECT id, nama_film FROM film WHERE nama_film LIKE '%$query%' LIMIT 10";
$result = $conn->query($sql);

$movies = [];
while ($row = $result->fetch_assoc()) {
    $movies[] = [
        "id" => $row['id'],
        "nama_film" => $row['nama_film']
    ];
}

header('Content-Type: application/json');
echo json_encode($movies);
?>
