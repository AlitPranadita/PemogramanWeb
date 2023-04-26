<?php
    include("cmd/user.php");
    $psn="";
    //cek pengiriman
    if(isset($_POST["txPass1"])){
        if($_POST["txPass1"] == $_POST["txPass2"]){
            $nama = $_POST["txNama"];
            $email = $_POST["txEmail"];
            $user = $_POST["txUser"];
            $pass = $_POST["txPass1"];

            if(createuser($nama, $email, $user, $pass)){
                $psn="Create Data User Success";
            }else{
                $psn="Create Data User Filed";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>register user</title>
</head>
<body>
    <form method="POST" action="register.php"  class="m-auto border p-4 w-50">
        <?php
            echo "<div>$psn</div>"
        ?>

        <div>
            Nama Lengkap
            <input type="text" name="txNama" class="form-control">
        </div>
        <div>
            Email
            <input type="text" name="txEmail" class="form-control">
        </div>
        <div>
            Username
            <input type="text" name="txUser" class="form-control">
        </div>
        <div>
            Password
            <input type="password" name="txPass1" class="form-control">
        </div>
        <div>
            Verifikasi Password
            <input type="password" name="txPass2"class="form-control">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>