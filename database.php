<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veritabanı bağlantısı
    $mysqli = new mysqli("localhost", "root", "", "webtabanli");

    // Bağlantı kontrolü
    if ($mysqli->connect_error) {
        die("Bağlantı hatası: " . $mysqli->connect_error);
    }

    // Kullanıcı ID'si otomatik olarak oluşturulacak
    // Şifre hash'leniyor
    

    // Veritabanına veri ekleme sorgusu (hazır ifade kullanımı)
    $sql = "INSERT INTO tablom (isim, soyisim, dogumtarihi, email, sifre) 
        VALUES (?, ?, ?, ?, ?)";


    // Sorguyu hazırla
    $stmt = $mysqli->prepare($sql);

    // Sorguyu çalıştırma
    if ($stmt) {
        // Parametreleri bağla
        $stmt->bind_param("sssss", $firstName, $lastName, $birthdate, $email, $password);


        // Sorguyu çalıştır
        if ($stmt->execute()) {
            echo "Kayıt başarıyla eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $mysqli->error;
        }
        // İfadeleri kapat
        $stmt->close();
    } else {
        echo "Hazırlama hatası: " . $mysqli->error;
    }

    // Veritabanı bağlantısını kapat
    $mysqli->close();
}
?>
