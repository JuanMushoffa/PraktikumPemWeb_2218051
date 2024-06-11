<?php
include '../koneksi.php';

// menyimpan data yang dikirim dari form
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $jenis_kompensasi = $_POST['jenis_kompensasi'];
    $biaya_kompensasi = $_POST['biaya_kompensasi'];
    $total_kompensasi = $_POST['total_kompensasi'];
    // menyimpan data ke database
    $sql = "INSERT INTO tb_datakompen VALUES(NULL, '$nama', '$jabatan', '$jenis_kompensasi', '$biaya_kompensasi', '$total_kompensasi')";

    if (empty($nama) || empty($jabatan) || empty($jenis_kompensasi) || empty($biaya_kompensasi) || empty($total_kompensasi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../total/entry-total.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Total Berhasil Ditambahkan');
                window.location = '../total/data-total.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../total/entry-total.php'
            </script>
        ";
    }
} elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $jabatan    = $_POST['jabatan'];
    $jenis_kompensasi = $_POST['jenis_kompensasi'];
    $biaya_kompensasi = $_POST['biaya_kompensasi'];
    $total_kompensasi = $_POST['total_kompensasi'];

    $sql = "UPDATE tb_datakompen SET 
            nama = '$nama',
            jabatan = '$jabatan',
            jenis_kompensasi = '$jenis_kompensasi',
            biaya_kompensasi = '$biaya_kompensasi',
            total_kompensasi = '$total_kompensasi'
            WHERE id = $id 
            ";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Total Berhasil Diubah');
                window.location = '../total/data-total.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../total/datatotal-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_datakompen WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql = "DELETE FROM tb_datakompen WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Total Berhasil Dihapus');
                window.location = '../total/data-total.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Categories Gagal Dihapus');
                window.location = '../total/data-total.php';
            </script>
        ";
    }
}else {
    header('location: ../total/data-total.php');
}
