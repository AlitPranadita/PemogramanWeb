<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <form action="">
        <h2>Menghitung Luas Segitiga</h2>
        <div>
            Masukan Tinggi
            <input type="number" id="txTINGGI" placeholder="Masukan Tinggi" name="txTINGGI" value="Masukan Tinggi">
        </div>
        <div>
            Masukan Alas
            <input type="number" id="txALAS" placeholder="Masukan Alas" name="txALAS" value="Masukan Alas">
        </div>
        <div>
            <button type="button" onclick="luas()">Hitung</button>
        </div>
    </form>
    <script>
        function luas(){
            sisi = document.getElementById("txTINGGI").value;
            alas = document.getElementById("txALAS").value;
            luas =(alas * sisi)*0.5;
            alert("Luas Segitiga adalah:"+luas)
        }
    </script>
</body>
</html>