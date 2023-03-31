<?php

    $mhs = array(
        array("Nama"=>"Boboiboy", "ID"=>"1234","Kota" =>"Bali"),
        array("Nama"=>"Udin", "ID"=>"5678","Kota" =>"Durian Runtuh"),
        array("Nama"=>"Adudu", "ID"=>"01010","Kota" =>"Mars"),
        array("Nama"=>"Sambo", "ID"=>"13131","Kota" =>"Bekasi"),
    );

   /*  echo $mhs[0]["Nama"];
    echo "<hr>";
    print_r($mhs);
    echo "<hr>";

    foreach($mhs as $data){

        foreach($data as $lb => $nval){
            echo $lb . " : " . $nval . "<br>";
        }

        echo "<br>";

    } */

    header("Content-type: application/json");
    echo json_encode($mhs);