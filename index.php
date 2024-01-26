<?php
include 'qrcode.php';


if(isset($_POST['qr'])){
    $text = $_POST['qr'];
    $name  = md5(time()) . ".png";
    
    $file = "files/{$name}";
    $options = array(
        'w' => 500,
        'h' => 400
    );
    $generator = new QRCode($text, $options);
    $generator->output_image();

    
}


?>


<!DOCTYPE html>
<html lang="en">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-size:20px
        }

        .container {
            text-align: center;
        }

        .qr-form {
            max-width: 300px;
            margin: 0 auto;
        }

        input{
            padding:10px;
            border: 1px solid blue;
            border-radius:3px;
        }

        button{
            color:white;
            background-color:blue;
            padding:10px;
            border:none;
            border-radius:4px;
        }

     
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
</head>
<body>

    <div class="container">
        <form action="" method="post">
            <input type="text" name="qr" placeholder="Digite o link">
            <button type="submit">Gerar QRcode</button>
        </form>
    </div>
   
</body>
</html>