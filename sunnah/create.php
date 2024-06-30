<?php
require("../config/koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $judul = $_POST["judul"];
    $desk = $_POST["desk"];
    $sub = $_POST["sub"];
    $kategori = $_POST["kategori"];
    $favorit = $_POST["favorit"];
    $hour = $_POST["hour"];
    $minute = $_POST["minute"];

    $perintah = "INSERT INTO sunnah (judul, desk, sub, kategori, favorit, hour, minute) VALUES('$judul','$desk','$sub','$kategori','$favorit','$hour','$minute')";
    $eksekusi = mysqli_query($konek, $perintah);
    $cek      = mysqli_affected_rows($konek);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Simpan Data Berhasil";
    }
    else{
        $response["kode"] = 0;
        $response["pesan"] = "Gagal Menyimpan Data";
    }
}
else{
    $response["kode"] = 0;
    $response["pesan"] = "Tidak Ada Post Data";
}

echo json_encode($response);
mysqli_close($konek);