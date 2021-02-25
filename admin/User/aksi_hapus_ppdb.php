<?php
include "../../config/koneksi.php";
include "../../config/MY_url_helper.php";

// jika prestasi_id tidak ada maka insert
$json = file_get_contents('php://input');
$_POST = json_decode($json, true);

$con->delete("tb_siswa", array('user_id' => $_POST['user_id']));
$con->delete("tb_sekolah_asal", array('user_id' => $_POST['user_id']));
$con->delete("tb_prestasi_siswa", array('user_id' => $_POST['user_id']));
$con->delete("tb_wali_siswa", array('user_id' => $_POST['user_id']));
$con->delete("tb_ayah_siswa", array('user_id' => $_POST['user_id']));
$con->delete("tb_ibu_siswa", array('user_id' => $_POST['user_id']));
$simpan = $con->delete("tb_user", array('user_id' => $_POST['user_id']));

$response = [];
if ($simpan) {
    $response["status"] = true;
    $response["pesan"] = "Data Sukses Di Hapus";
    echo json_encode($response);
} else {
    $response["status"] = false;
    $response["pesan"] = "Data Gagal Dihapus";
    echo json_encode($response);
}
