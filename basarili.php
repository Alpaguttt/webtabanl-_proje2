<?php
session_start(); // Oturumu başlat

// Kullanıcının oturum açıp açmadığını kontrol et
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: web3.php");
    exit();
}

// Kullanıcı bilgilerini oturumdan al
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Başarılı Giriş</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Başarılı Giriş</h2>
            <p class="text-center">Başarılı bir şekilde giriş yaptınız, <?php echo $firstName . ' ' . $lastName; ?>.</p>
            <a href="ssıwebproje.php" class="btn btn-primary btn-block">Ana Sayfaya Dön</a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>