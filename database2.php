<?php
session_start(); // Oturumu başlat

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen e-posta ve şifre
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veritabanı bağlantısı
    $mysqli = new mysqli("localhost", "root", "", "webtabanli");

    // Bağlantı kontrolü
    if ($mysqli->connect_error) {
        die("Bağlantı hatası: " . $mysqli->connect_error);
    }

    // Güvenliğin artırılması için gelen verileri temizleme
    $email = mysqli_real_escape_string($mysqli, $email);
    $password = mysqli_real_escape_string($mysqli, $password);

    // Kullanıcıyı veritabanında arama
    $sql = "SELECT sifre FROM tablom WHERE email='$email'";
    $result = $mysqli->query($sql);

    // Eğer kullanıcı bulunduysa
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['sifre'];

        // Şifreyi doğrula (hash kullanılmadığı için doğrudan karşılaştırma)
        if ($password === $storedPassword) {
            // Oturum değişkenlerini ayarlama
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            // Kullanıcıyı ana sayfaya yönlendirme
            header("location: basarili.php");
            exit();
        } else {
            echo "Geçersiz e-posta veya şifre. Lütfen tekrar deneyin.";
        }
    } else {
        echo "Geçersiz e-posta veya şifre. Lütfen tekrar deneyin.";
    }

    // Veritabanı bağlantısını kapat
    $mysqli->close();
}
?>