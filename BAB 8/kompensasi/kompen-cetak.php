<?php
    include('../koneksi.php');
    require_once("../dompdf/autoload.inc.php");

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $query = mysqli_query($koneksi, "SELECT * FROM tb_kompensasi");
    $html = '<center><h3>Data Kompensasi Sukses</h3></center><hr/><br>';
    $html .= '<table border="1" width="100%">
                <tr>
                    <th>NO</th>
                    <th>Nama Pegawai</th>
                    <th>Jenis Kompensasi</th>
                    <th>Biaya Kompensasi</th>
                    <th>Total Kompensasi</th>
                    <th>Status</th>
                </tr>';
    $no = 1;
    while ($kompensasi = mysqli_fetch_array($query)) {
        $html .= "<tr>
                    <td>" . $no . "</td>
                    <td>" . $kompensasi['nama'] . "</td>
                    <td>" . $kompensasi['jenis_kompensasi'] . "</td>
                    <td>" . $kompensasi['biaya_kompensasi'] . "</td>
                    <td>" . $kompensasi['total_kompensasi'] . "</td>
                    <td>" . "Sukses" . "</td>
                </tr>";
        $no++;
    }
    $html .= "</table>";
    $dompdf->loadHtml($html);
    // Setting ukuran dan orientasi kertas
    $dompdf->setPaper('A4', 'potrait');
    // Rendering dari HTML Ke PDF
    $dompdf->render();
    // Melakukan output file Pdf
    $dompdf->stream('laporan-kompensasi.pdf');
?>
