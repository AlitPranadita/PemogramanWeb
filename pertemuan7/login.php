<?php
    session_start();
    include("cmd/user.php");
    if(isset($_POST["txUser"])){
        $user = $_POST["txUser"];
        $pass = $_POST["txPass"];

        $islogin = ceklogin($user, $pass);
        if($islogin["STATUS"]){
            $_SESSION["login"] = md5($user);
            $_SESSION["NAMA"] = $islogin["NAMA"];
            header("location: dashboard.php");
        }else{
            $_SESSION["login"] = "";
            $_SESSION["NAMA"] = "";
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
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST" class="m-auto border p-4 w-50">
        <h3 class="text-center">Form Login</h3>
        <div class="mt-2">
            Username
            <input type="text" name="txUser" class="form-control">
        </div>
        <div class="mt-2">
            Password
            <input type="password" name="txPass" class="form-control">
        </div>
        <div class="mt-2">
            <button type=""submit class="btn btn-outline-primary">Login</button>
        </div>
    </form>
</body>
</html>