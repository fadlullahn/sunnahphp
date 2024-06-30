<?php
require("../config/koneksi.php");

$response = array();

$perintah = "SELECT * FROM kategori";
$eksekusi = mysqli_query($konek, $perintah);
$cek = mysqli_num_rows($eksekusi);

if($cek > 0){
    $response["kode"] = 1;
    $response["pesan"] = "Data Tersedia";
    $response["data"] = array();

    while($ambil = mysqli_fetch_object($eksekusi)){
        $F["id"] = $ambil->id;
        $F["namakategori"] = $ambil->namakategori;
        $F["subkategori"] = $ambil->subkategori;
        
        $response["data"][] = $F;
    }
    
}
else{
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($konek);
?>
