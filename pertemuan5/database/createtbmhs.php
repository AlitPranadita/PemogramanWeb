<?php
    include("koneksi.php");

    $tbel = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(10),
        prodi VARCHAR(255),
        jeniskelamin VARCHAR(1),
        tgllahir DATE,
        idmhs VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn,$tbel);
    if($hsl){
        echo "Tabel tbMHS ==> sukses";
    }
    else{
        echo "Tabel tbMHS ==> gagal";
    }