<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenis_kompensasi = $_POST['jenis_kompensasi'];
    $biaya_kompensasi = $_POST['biaya_kompensasi'];
    $total_kompensasi = $_POST['total_kompensasi'];

    $sql = "INSERT INTO tb_kompensasi VALUES(null, '$nama','$jenis_kompensasi','$biaya_kompensasi', '$total_kompensasi')";

    if (empty($nama) || empty($jenis_kompensasi) || empty($biaya_kompensasi) ||  empty($total_kompensasi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../kompensasi/kompen-entry.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Kompensasi Berhasil');
                window.location = '../kompensasi/data-kompen.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../kompensasi/kompen-entry.php';
            </script>
        ";
    }
} else {
    header('location: ../kompensasi/data-kompen.php');
}
