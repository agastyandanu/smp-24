<?php
// include "../build/MY_url_helper.php";
require_once("../build/dompdf/autoload.inc.php");
// $f;
// $l;
// if (headers_sent($f, $l)) {
//     echo $f, '<br/>', $l, '<br/>';
//     die('now detect line');
// }

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$id = $_GET['id'];
ob_get_clean();
ob_start();
?>
<!doctype html>
<html lang="en">

<head>
    <style>
        .page_break {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <table border="0" style="width:100%">
        <tr>
            <td style="width:250px"><img src="../img/head1.png" alt="" style="width: 100%; height:100px"></td>
            <td colspan="3" style="text-align: center;">
                <h3>MAN KOTA PARIAMAN</h3>
                <p>Jl. Nan Tongga Padusunan, Kp. Gadang, Pariaman Tim., <br> Kota Pariaman, Sumatera Barat 25523,</p>
            </td>
        </tr>
        <hr>
        <hr>
    </table>
    <?php
    $siswa = mysqli_fetch_array(mysqli_query($con, "SELECT
                                tb_siswa.siswa_id,
                                tb_siswa.user_id,
                                tb_siswa.siswa_nama,
                                tb_siswa.siswa_jekel,
                                tb_siswa.siswa_tempat_lahir,
                                tb_siswa.siswa_tgl_lahir,
                                tb_siswa.siswa_alamat,
                                tb_siswa.siswa_foto,
                                tb_siswa.siswa_nik,
                                tb_siswa.siswa_agama,
                                tb_siswa.siswa_tinggi,
                                tb_siswa.siswa_berat,
                                tb_siswa.siswa_anak_ke,
                                tb_siswa.siswa_noreg,
                                tb_siswa.siswa_tgl_daftar,
                                provinsi.nama_prov,
                                kabupaten.nama_kab,
                                kecamatan.nama_kec
                            From
                                tb_siswa Inner Join
                                provinsi On provinsi.id_prov = tb_siswa.id_prov Inner Join
                                kabupaten On kabupaten.id_kab = tb_siswa.id_kab Inner Join
                                kecamatan On kecamatan.id_kec = tb_siswa.id_kec
                            WHERE tb_siswa.user_id = '$id'"));
    ?>
    <h3>No Registrasi : <?php echo $siswa['siswa_noreg'] ?></h3>
    <h3>Tanggal Registrasi : <?php echo tgl_indo_waktu($siswa['siswa_tgl_daftar']) ?></h3>

    <h4>A. Data Siswa</h4>
    <table border="0" style="width: 100%; font-size: 14px;">

        <tr>
            <td width="200px">
                <img src="../img/siswa/<?= $siswa['siswa_foto'] ?>" style="width: 100%; height: 290px; margin-left:0px; padding: 5px">
            </td>
            <td style="padding-left: 15px;">
                <table border="0" style="width: 100%;">
                    <tr>
                        <td width="140px" style="margin-left: 10px;">Nama</td>
                        <td width="10px">:</td>
                        <td><?php echo $siswa['siswa_nama'] ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_nik'] ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_jekel'] ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_tempat_lahir'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo tgl_indo($siswa['siswa_tgl_lahir']) ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_agama'] ?></td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_tinggi'] ?> Cm</td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_berat'] ?> Kg</td>
                    </tr>
                    <tr>
                        <td>Anak ke</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_anak_ke'] ?></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td><?php echo $siswa['nama_prov'] ?></td>
                    </tr>
                    <tr>
                        <td>Kabupaten</td>
                        <td>:</td>
                        <td><?php echo $siswa['nama_kab'] ?></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><?php echo $siswa['nama_kec'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $siswa['siswa_alamat'] ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <h4>B. Prestasi Siswa</h4>
    <table width="100%" style="border-collapse: collapse; font-size: 14px;">
        <thead>
            <tr>
                <th style="border: 1px solid black;">No</th>
                <th style="border: 1px solid black;">Kategori</th>
                <th style="border: 1px solid black;">Juara</th>
                <th style="border: 1px solid black;">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $prestasi = $con->query("SELECT * FROM tb_prestasi_siswa WHERE user_id = '$id'");
            foreach ($prestasi as $i => $a) {
            ?>
                <tr>
                    <td style="border: 1px solid black;"><?= $i + 1 ?></td>
                    <td style="border: 1px solid black;"><?= $a['prestasi_kategori'] ?></td>
                    <td style="border: 1px solid black;"><?= $a['prestasi_juara'] ?></td>
                    <td style="border: 1px solid black;"><?= $a['prestasi_deskripsi'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h4>C. Data Ayah</h4>
    <table border="0" style="width: 100%; font-size: 14px;">
        <?php
        $ayah = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_ayah_siswa WHERE tb_ayah_siswa.user_id = '$id'"));
        ?>
        <tr>
            <td width="140px">Nama</td>
            <td width="10px">:</td>
            <td><?php echo $ayah['ayah_nama'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $ayah['ayah_tempat_lahir'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo tgl_indo($ayah['ayah_tgl_lahir']) ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td><?php echo $ayah['ayah_pendidikan'] ?></td>
        </tr>
        <tr>
            <td>No Telpon</td>
            <td>:</td>
            <td><?php echo $ayah['ayah_notelp'] ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $ayah['ayah_pekerjaan'] ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo $ayah['ayah_gaji'] ?></td>
        </tr>
    </table>
    <h4>D. Data Ibu</h4>
    <table border="0" style="width: 100%; font-size: 14px;">
        <?php
        $ibu = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_ibu_siswa WHERE tb_ibu_siswa.user_id = '$id'"));
        ?>
        <tr>
            <td width="140px">Nama</td>
            <td width="10px">:</td>
            <td><?php echo $ibu['ibu_nama'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $ibu['ibu_tempat_lahir'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo tgl_indo($ibu['ibu_tgl_lahir']) ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td><?php echo $ibu['ibu_pendidikan'] ?></td>
        </tr>
        <tr>
            <td>No Telpon</td>
            <td>:</td>
            <td><?php echo $ibu['ibu_notelp'] ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $ibu['ibu_pekerjaan'] ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo $ibu['ibu_gaji'] ?></td>
        </tr>
    </table>
    <h4>E. Data Wali</h4>
    <table border="0" style="width: 100%; font-size: 14px;">
        <?php
        $wali = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_wali_siswa WHERE tb_wali_siswa.user_id = '$id'"));
        if (!empty($wali)) {
        ?>
            <tr>
                <td width="200px">Nama</td>
                <td width="10px">:</td>
                <td><?php echo $wali['wali_nama'] ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo $wali['wali_tempat_lahir'] ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo tgl_indo($wali['wali_tgl_lahir']) ?></td>
            </tr>
            <tr>
                <td>Hubungan dengan siswa</td>
                <td>:</td>
                <td><?php echo $wali['wali_status'] ?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><?php echo $wali['wali_pendidikan'] ?></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><?php echo $wali['wali_notelp'] ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $wali['wali_pekerjaan'] ?></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><?php echo $wali['wali_gaji'] ?></td>
            </tr>
        <?php
        } else {
        ?>
            <tr>
                <td width="200px">Nama</td>
                <td width="10px">:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Hubungan dengan siswa</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td>-</td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <br>
    <br>
    <table width="100%" border="0" style="text-align: center; font-size: 14px;" style="width: 100%;">
        <tr>
            <td colspan="2">
                <p>Padang, ... - ....................... - 2020</p>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <p>Tertanda, Ayah Siswa</p>
                <br>
                <br>
                <br>
                <br>
                <p>.......................</p>
            </td>
            <td style="text-align: center;">
                <p>Tertanda, Ibu Siswa</p>
                <br>
                <br>
                <br>
                <br>
                <p>.......................</p>
            </td>
        </tr>

    </table>
</body>

</html>

<?php
$html = ob_get_clean();
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('formulir.pdf');
exit;
?>