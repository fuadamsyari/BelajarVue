<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'pendidikan');

$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

$response = array();


while ($row = mysqli_fetch_assoc($sql)) {
    $response[] = $row;
}

echo json_encode($response);
