<?php
include "../../config/koneksi.php";

// jika prestasi_id tidak ada maka insert
$json = file_get_contents('php://input');
$_POST = json_decode($json, true);

$simpan = mysqli_query($con, "UPDATE tb_user SET user_bayar = '$_POST[user_bayar]' WHERE user_id = '$_POST[user_id]'");

$response = [];
if ($simpan) {
    $response["status"] = true;
    $response["pesan"] = "Data Sukses Di Perbarui";
    echo json_encode($response);
} else {
    $response["status"] = false;
    $response["pesan"] = "Data Gagal Diperbarui";
    echo json_encode($response);
}
