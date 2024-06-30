<?php
require("../config/koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $desk = $_POST["desk"];
    $kategori = $_POST["kategori"];
    $sub = $_POST["sub"];
    $favorit = $_POST["favorit"];
    
    $perintah = "UPDATE sunnah SET judul = '$judul', desk = '$desk', kategori = '$kategori', sub = '$sub', favorit = '$favorit' WHERE id = '$id'";
    $eksekusi = mysqli_query($konek, $perintah);
    $cek      = mysqli_affected_rows($konek);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Data Berhasil Diubah";
    }
    else{
        $response["kode"] = 0;
        $response["pesan"] = "Data Gagal Diubah";
    }
}
else{
    $response["kode"] = 0;
    $response["pesan"] = "Tidak Ada Post Data";
}

echo json_encode($response);
mysqli_close($konek);