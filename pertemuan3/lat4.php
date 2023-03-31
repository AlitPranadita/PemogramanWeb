<?php
    function TentangAplikasi(){
        echo "<h3>Aplikasi Apasaja</h3>";
        echo "<sup>versi 1.0</sup>";
        echo "<br>";
    }
    function cetaklabel01($tx){
        echo "Isi Label: ". $tx;
    }
    function cetaklabel02($tx="Isikan label"){
        echo "Isi Label: ". $tx;
    }
    function jumlahkan($angka1=0, $angka2=0){
        return $angka1+$angka2;
    }