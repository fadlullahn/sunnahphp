<?php
require("../config/koneksi.php");
$perintah = "SELECT * FROM sunnah";
$eksekusi = mysqli_query($konek, $perintah);
$cek = mysqli_affected_rows($konek);

if($cek > 0){
    $response["kode"] = 1;
    $response["pesan"] = "Data Tersedia";
    $response["data"] = array();

    while($ambil = mysqli_fetch_object($eksekusi)){
        $F["id"] = $ambil->id;
        $F["judul"] = $ambil->judul;
        $F["desk"] = $ambil->desk;
        $F["kategori"] = $ambil->kategori;
        $F["sub"] = $ambil->sub;
        $F["favorit"] = $ambil->favorit;
        $F["hour"] = $ambil->hour;
        $F["minute"] = $ambil->minute;
        
        
        array_push($response["data"], $F);
    }
    
}
else{
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($konek);