<?php
    $age = array("Alit"=>"2201010559", "Lanyink"=>"2201010610","Budi"=>"2201010212");

    echo "Umur dari Alit ".$age["Alit"]. " tahun<br>";

    echo "<hr>";
    foreach($age as $nama => $nim) {
        echo "Nim dari " . $nama . " : ". $nim. "<br>";
    }
    