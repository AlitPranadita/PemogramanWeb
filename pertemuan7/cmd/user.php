<?php
    include("database/koneksi.php");

    function createuser($nama, $email, $user, $pass){
        $stt=false;
        $iduser=md5($user);

        $sql = "INSERT INTO tbuser(nama, email, username, paskey, iduser)
        VALUES(
            '$nama',
            '$email',
            '$user',
            '$pass',
            '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql Gagal");
        $stt= mysqli_query($cnn, $sql);
        return $stt;
    }

    function ceklogin($user, $pass){
        global $cnn;
        $hsl["STATUS"] = false;

        $sql = "SELECT nama, email, username, paskey, iduser FROM tbuser WHERE username = '$user';";
        echo $sql;
        $hs = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hs);
        if($jdata>0){
            $h = mysqli_fetch_assoc($hs);
            if($h["paskey"] = $pass){
                $hsl["STATUS"] = true;
                $hsl["NAMA"] = $h["nama"];
                $hsl["EMAIL"] = $h["email"];
                $hsl["IDUSER"] = $h["iduser"];
            }
        }
        return $hsl;
    }
?>