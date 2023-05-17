<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Latihan1</title>
</head>
<body>
    <form class="container" name="lat1.php" method="POST" onsubmit="return checkform(this)">
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input class="form-control" type="text" name="txNAMA" id="NAMA" placeholder="Masukan Nama">
        </div>
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input class="form-control" type="text" name="txNIM" id="NIM" placeholder="Masukan Nim">
        </div>
        <div class="mb-3">
            <label class="form-label">JENIS KELAMIN</label><br>
            <input class="form-check-input" type="radio" name="txJKEL" id="JKEL" value="Laki-Laki">Laki - Laki <br>
            <input class="form-check-input" type="radio" name="txJKEL" id="JKEL" value="Perempuan">Perempuan
        </div>
        <div class="mb-3">
            <label class="form-label">JURUSAN</label>
            <select class="form-select" name="txJURUSAN" id="JURUSAN">
                <option value="Tata Boga">Tata Boga</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Nuklir">Teknik Nuklir</option>
                <option value="Hukum">Hukum</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">HOBI</label> <br>
            <input class="form-check-input" type="checkbox" name="txHOBI_MANCING" value="MANCING">Mancing <br>
            <input class="form-check-input" type="checkbox" name="txHOBI_GAME" value="GAME">Game <br>
            <input class="form-check-input" type="checkbox" name="txHOBI_SEPAKBOLA" value="SEPAK BOLA">Sepak Bola <br>
            <input class="form-check-input" type="checkbox" name="txHOBI_BERNYANYI" value="BERNYAYI">Bernyanyi <br>
            <input class="form-check-input" type="checkbox" name="txHOBI_NYIMBAR" value="NYIMBAR">Nyimbar <br>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Kirim Data</button>
        </div>

    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            let nama = F.namedItem("txNAMA").value;
            let nim = F.namedItem("txNIM").value;
            let jk = F.namedItem("txJKEL").value;
            let jrs = F.namedItem("txJURUSAN").value;
            let hobi_1 = [
                F.namedItem("txHOBI_MANCING").checked,
                F.namedItem("txHOBI_GAME").checked,
                F.namedItem("txHOBI_SEPAKBOLA").checked,
                F.namedItem("txHOBI_BERNYANYI").checked,
                F.namedItem("txHOBI_NYIMBAR").checked
            ]

            console.log("NAMA: "+nama)
            console.log ("NIM: "+nim)
            console.log("JENIS KELAMIN: "+jk)
            console.log("JURUSAN: "+jrs)
            console.log("HOBI: "+hobi_1)

            return false;
        }
    </script>
</body>
</html>