<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <style>
        *{
            color: black;
            text-align: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 40px;
        }
    </style>
    <script src="js/contact.js"></script>
    <title>İletişim</title>
</head>
<body>
    <?php

$name=$_POST['name'];
$email=$_POST['email'];
$bolum=$_POST['bolum'];
$reason=$_POST['reason'];
$details=$_POST['details'];
echo "Merhaba sayın</br> ".$name ,"</br>Epost adresiniz: ".$email,"</br> Bolümünüz: ".$bolum,
"</br>Sorunuz: ".$reason ," ve ".$details ,"</br>detayları bıraktınız için teşekür ederiz<br>";




    ?>
</body>
</html>