<?php
require("../config/koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST["id"];
    
    $perintah = "SELECT * FROM kategori WHERE id = '$id'";
    $eksekusi = mysqli_query($konek, $perintah);
    $cek      = mysqli_affected_rows($konek);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Data Tersedia";
        $response["data"] = array();

        while($ambil = mysqli_fetch_object($eksekusi)){
            $F["id"] = $ambil->id;
            $F["namakategori"] = $ambil->namakategori;
            $F["subkategori"] = $ambil->subkategori;
            
            array_push($response["data"], $F);
        }
    }
    else{
        $response["kode"] = 0;
        $response["pesan"] = "Data Tidak Tersedia";
    }
}
else{
    $response["kode"] = 0;
    $response["pesan"] = "Tidak Ada Post Data";
}

echo json_encode($response);
mysqli_close($konek);