<?php
    $judulpage="Latihan Scrip PHP";
    $konten="<h3>Latihan Scrip PHP</h3>";
    $konten.="<p>Dasar penulisan PHP:<ul><li>penulisan scrip php bersifat case sensitive</li><li>setiap akhir baris ditandai dengan titik koma</li>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage;?></title>
</head>
<body>
    <?php
        echo $konten;
    ?>
</body>
</html>