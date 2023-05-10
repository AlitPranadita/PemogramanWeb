<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <div id="pesan">Pesan Singkat</div>
    <script src="lat1.js"></script>
    <script>
        //button
         function myFunction(){
            document.getElementById("klik").innerHTML = "Berhasil";
        }
        //tulisan
        document.write("<span style='color: #3CB371'> Menulis dengan Javascrip </span>")
        document.getElementById("pesan").innerHTML="Mengganti tulisan pesan singkat";
        document.getElementById("pesan").style.color="aqua";
       
    </script>

    <div id="klik">Silahkan klik tombol dibawah</div>
    <button type="button" onclick="myFunction()">Klik</button>
</body>
</html>