<?php
require '../../vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('Template.xlsx');
$sheet = $spreadsheet->getActiveSheet();

$query = $con->query("SELECT 
                        GROUP_CONCAT(DISTINCT tb_kakak.kakak_kelas ORDER BY tb_kakak.kakak_kelas DESC) as kakak_kelas, 
                        tb_siswa.siswa_nama,
                        tb_siswa.siswa_noreg,
                        tb_siswa.siswa_jekel, 
                        tb_sekolah_asal.sekolah_asal_nama, 
                        tb_ayah_siswa.ayah_nama, 
                        tb_ayah_siswa.ayah_notelp, 
                        tb_ibu_siswa.ibu_nama, 
                        tb_ibu_siswa.ibu_notelp, 
                        tb_siswa.siswa_alamat 
                    From 
                        tb_user 
                    Left Join tb_siswa On tb_user.user_id = tb_siswa.user_id 
                    Left Join tb_ayah_siswa On tb_user.user_id = tb_ayah_siswa.user_id 
                    Left Join tb_sekolah_asal On tb_user.user_id = tb_sekolah_asal.user_id 
                    Left Join tb_ibu_siswa On tb_user.user_id = tb_ibu_siswa.user_id Left Join tb_kakak On tb_user.user_id = tb_kakak.user_id
                    WHERE 
                        tb_user.user_status = 'Pendaftaran Selesai' 
                    AND 
                        tb_user.user_bayar = 'Lunas' 
                    GROUP BY tb_siswa.siswa_id")->fetchAll();
$i = 3;
foreach ($query as $no => $row) {
    $sheet->setCellValue('A' . $i, $no + 1);
    $sheet->setCellValue('B' . $i, $row['siswa_noreg']);
    $sheet->setCellValue('C' . $i, $row['siswa_nama']);
    $sheet->setCellValue('D' . $i, $row['siswa_jekel']);
    $sheet->setCellValue('E' . $i, $row['sekolah_asal_nama']);
    $sheet->setCellValue('F' . $i, $row['ayah_nama']);
    $sheet->setCellValue('G' . $i, $row['ibu_nama']);
    $sheet->setCellValue('H' . $i, $row['ayah_notelp']);
    $sheet->setCellValue('I' . $i, $row['ibu_notelp']);
    $sheet->setCellValue('J' . $i, $row['siswa_alamat']);
    $sheet->setCellValue('K' . $i, $row['kakak_kelas']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:K' . $i)->applyFromArray($styleArray);

// merapikan lebar kolom
$sheet->getColumnDimension("A")->setAutoSize(true);
$sheet->getColumnDimension("B")->setAutoSize(true);
$sheet->getColumnDimension("C")->setAutoSize(true);
$sheet->getColumnDimension("D")->setAutoSize(true);
$sheet->getColumnDimension("E")->setAutoSize(true);
$sheet->getColumnDimension("F")->setAutoSize(true);
$sheet->getColumnDimension("G")->setAutoSize(true);
$sheet->getColumnDimension("H")->setAutoSize(true);
$sheet->getColumnDimension("I")->setAutoSize(true);
$sheet->getColumnDimension("J")->setAutoSize(true);
$sheet->getColumnDimension("K")->setAutoSize(true);

$nama_file = "Report_Data_Peserta_PPDB.xlsx";

$writer = new Xlsx($spreadsheet);
$writer->save($nama_file);
$filename = $nama_file;

// JIKA FILE YANG DIMAKSUD ADA, MAKA....
if (file_exists($filename)) {
    // AMBIL TIPE ATAU MIMETYPE FILE
    $finfo = finfo_open(FILEINFO_MIME_TYPE); // BACA INFORMASI FILE
    header('Content-Type: ' . finfo_file($finfo, $filename)); // MASUKAN MIMETYPE FILE KE HTTP HEADER RESPONSE
    finfo_close($finfo);  // TUTUP INFORMASI FILE

    // SET NAMA FILE KE HEADER HTTP RESPONSE
    header('Content-Disposition: attachment; filename=' . basename($filename));

    // MATIKAN CACHE PADA HTTP RESPONSE
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');

    // TENTUKAN UKURAN FILE DAN SET KE HTTP HEADER
    header('Content-Length: ' . filesize($filename));

    // HAPUS SEMUA OUTPUT DARI KODE SEBELUMNYA
    ob_clean();
    flush();

    // BACA FILE 
    readfile($filename);
    ignore_user_abort(true);
    if (connection_aborted()) {
        unlink($nama_file); // HAPUS FILE SETELAH DIKIRIM KE USER
    } else {
        unlink($nama_file);
    }
    exit;
}
