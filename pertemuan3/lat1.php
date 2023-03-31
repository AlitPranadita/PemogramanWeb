<?php

    $cars = array("Honda Civic", "Toyota Supra", "Tesla", "Lamborgini");

    $jmlhdata = count($cars);
    echo "Jumlah Data: ". $jmlhdata . "<br>";

    for($i=0;$i<$jmlhdata;$i++){
        echo "<br>Kendaraan ". $cars[$i];
    }

    echo "<hr>";
    echo "<ol class='Mobil'>";
    foreach($cars as $data){
        echo "<li>Kendaraan ". $data . "</li>";
    }
    echo "</ol>";