<?php 
    $user = "";
    $psw = "";
    $euser = "";
    $epsw = "";
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"]; 
        $psw = $_POST["txPASKY"]; 
        if($user==""){
            $euser = "<div style='color:red';font-size: '10px;'> Field User masih kosong </div>";
        }
        if($psw==""){
            $epsw = "<div style='color:red';font-size: '10px;'> Field Password masih kosong </div>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method Post</title>
</head>
<body>
    <form method="POST" action="latihan02.php">
        <div>
            User Name
            <input type="text" name="txUSER">
            <?=$euser;?>
        </div>
        <div>
            Password
            <input type="password" name="txPASKY">
            <?=$epsw;?>
        </div>
        <div>
            <button> Login </button>
        </div>
    </form>
    <div>
        Isi dari Form: <br>
            1. User Name: <?=$user?><br>
            2. Password: <?=$psw?><br>
    </div>
</body>
</html>