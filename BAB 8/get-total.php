<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $totalId = $_GET['id'];

    $sql = "SELECT * FROM tb_datakompen WHERE id = $totalId";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Failed to retrieve category data.']);
    }
} else {
    echo json_encode(['error' => 'Category ID not provided.']);
}
?>
