<!DOCTYPE html>
<html lang="en">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidenav {
  height: 100%;
  width: 0; /*Genişliği javascriptle değiştir*/
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden; /*Yatay kaydırmayı devre dışı bırak */
  transition: 0.5s;/* Sidenav'da kaymaya 0,5 saniye geçiş efekti */
  padding-top: 60px; /*İçeriği üstten 60 piksel yerleştirin */
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
/*Menüler üzerine gelince  renklerini değiştirin */

.sidenav a:hover {
  color: #f1f1f1; 
}
/*Kapat düğmesini konumlandırın ve stillendirin (sağ üst köşe) */

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
/* Yüksekliğin 450 pikselden az olduğu daha küçük ekranlarda, 
sidenav stilini değiştirin 
(daha az dolgu ve daha küçük bir yazı tipi boyutu) */

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="YanMenu" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">

  &times;</a>

  <a href="ssıwebproje.php">Anasayfa</a>
  <a href="hakkımızda.php">HAKKIMIZDA</a>
  <a href="kayıtol.php">KAYIT OL</a>
  <a href="web3.php">GİRİŞ YAP</a>
  
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">
&#9776; open 
</span>

<!-- javascript ile menuyu açma kapatma -->

<script>
function openNav() {
  document.getElementById("YanMenu").style.width = "250px";
}

function closeNav() {
  document.getElementById("YanMenu").style.width = "0";
}
</script>
   
</body>




<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sustainable Solutions Initiative</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .jumbotron {
      background-color: #f8f9fa;
      margin-bottom: 0;
      padding: 2rem 1rem;
      text-align: center;
    }

    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }

    footer {
      background-color: #f8f9fa;
      padding: 25px;
    }
  </style>
</head>
<body>
  <!-- Navbar 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">SSI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#about">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projects">Projeler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">İletişim</a>
        </li>
      </ul>
    </div>
  </nav>-->

  <!-- Header Bölümü -->
  <header class="jumbotron text-center">
    <h1 class="display-4">Sustainable Solutions Initiative</h1>
    <p class="lead">Building the Future Through the Journey of Sustainability</p>
   
  </header>

  <!-- SSI Hakkında Giriş Paragrafı -->
  <section class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        
        <p>"Sustainable Solutions Initiative (SSI), gezegenimizi korumak ve sürdürülebilir yaşamı teşvik etmek amacıyla hareket eden bir öncü organizasyondur.
             SSI, doğal kaynakların korunması, çevresel bilincin artırılması ve toplumları sürdürülebilir uygulamalar konusunda bilgilendirme misyonuyla yoluna 
             devam etmektedir. Gelecek nesiller için daha yaşanabilir bir dünya inşa etme vizyonuyla, yenilikçi projelerimiz ve küresel işbirliklerimizle aktif 
             bir şekilde çalışıyoruz. Enerji dönüşümünden atık yönetimine, doğa koruma çalışmalarından yenilenebilir kaynakların teşvik edilmesine kadar geniş 
             bir yelpazede faaliyet göstererek, sürdürülebilirlik alanında somut ve kalıcı çözümler üretmeyi hedefliyoruz. SSI olarak, her bireyin ve kurumun
             sürdürülebilirlik yolculuğuna katkıda bulunmasını teşvik ediyor ve gezegenimizi gelecek kuşaklar için yaşanabilir kılmak için kararlılıkla çalışıyoruz."</p>
      </div>
    </div>
  </section>

  <!-- Hakkımızda Bölümü 
  <section id="about" class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Hakkımızda</h2>
        <p>Sustainable Solutions Initiative, çevreyi koruma ve sürdürülebilir yaşam tarzlarını teşvik etme amacıyla kurulmuş bir organizasyondur. Misyonumuz, yenilikçi projeler ve bilinçlendirme çalışmaları ile gezegenimizi gelecek nesiller için yaşanabilir kılmaktır.</p>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500x300" alt="Hakkımızda" class="img-fluid">
      </div>
    </div>
  </section>-->

  <!-- Projeler Bölümü -->
  <section id="projects" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center">Projelerimiz</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Proje 1">
            <div class="card-body">
              <h5 class="card-title">Yenilenebilir Enerji Köyü</h5>
              <p class="card-text">Yenilenebilir Enerji Köyü projesi, tamamen yenilenebilir enerji kaynakları ile kendi kendine yeterli bir köy inşa etmeyi hedefliyor.</p>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#project1Modal">Daha Fazla Bilgi</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Proje 2">
            <div class="card-body">
              <h5 class="card-title">Kapsamlı Atık Yönetim Sistemi</h5>
              <p class="card-text">Kapsamlı Atık Yönetim Sistemi projesi, atık azaltma, geri dönüşüm ve kompostlama süreçlerini entegre ederek atık yönetimini optimize etmeyi hedefler.</p>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#project2Modal">Daha Fazla Bilgi</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Proje 3">
            <div class="card-body">
              <h5 class="card-title">Biyolojik Çeşitlilik Koruma Programı</h5>
              <p class="card-text">Biyolojik Çeşitlilik Koruma Programı, nesli tehlike altındaki türlerin korunması ve doğal habitatların iyileştirilmesi için kapsamlı koruma faaliyetleri yürütür.</p>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#project3Modal">Daha Fazla Bilgi</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Modal 1 -->
<div class="modal fade" id="project1Modal" tabindex="-1" role="dialog" aria-labelledby="project1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- modal-dialog sınıfına modal-lg sınıfı eklendi -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="project1ModalLabel">Yenilenebilir Enerji Köyü</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Yenilenebilir Enerji Köyü projesi, sürdürülebilir yaşamın somut bir örneğini sunarak topluluklara yenilenebilir enerji çözümlerinin uygulanabilirliğini göstermeyi amaçlar. Bu proje kapsamında, güneş, rüzgar ve biyokütle gibi yenilenebilir enerji kaynaklarını kullanarak kendi enerjisini üreten bir köy kurulacaktır. Proje, enerji verimliliği, atık yönetimi ve su tasarrufu konularında da örnek teşkil edecektir. Eğitim programları ve atölyeler aracılığıyla, ziyaretçilere sürdürülebilir yaşam pratikleri hakkında bilgi verilecek ve bu uygulamaların yaygınlaşması teşvik edilecektir.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Modal 2 -->
  <div class="modal fade" id="project2Modal" tabindex="-1" role="dialog" aria-labelledby="project2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="project2ModalLabel">Kapsamlı Atık Yönetim Sistemi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Kapsamlı Atık Yönetim Sistemi projesi, topluluklarda atık yönetimini yeniden tanımlamayı amaçlamaktadır. Bu proje, hanehalkı ve işletmelerden kaynaklanan atıkların minimuma indirilmesi için geri dönüşüm ve kompostlama süreçlerini birleştirir. Proje kapsamında, atık ayrıştırma istasyonları kurulacak, eğitim programları düzenlenecek ve geri dönüşüm alışkanlıklarını teşvik eden kampanyalar yürütülecektir. Ayrıca, organik atıkların kompostlanması yoluyla toprak verimliliği artırılacak ve karbon ayak izi azaltılacaktır. Bu sistem, atıkların yeniden kullanılabilir hale getirilmesini ve çevresel etkilerin en aza indirilmesini sağlayacaktır.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="modal fade" id="project3Modal" tabindex="-1" role="dialog" aria-labelledby="project3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="project3ModalLabel">Biyolojik Çeşitlilik Koruma Programı</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Biyolojik Çeşitlilik Koruma Programı, doğal yaşam alanlarının korunması ve biyolojik çeşitliliğin sürdürülebilirliği için kapsamlı bir girişimdir. Bu proje, nesli tehlike altındaki bitki ve hayvan türlerini korumak için çeşitli stratejiler uygular. Doğal habitatların restorasyonu, koruma alanlarının oluşturulması ve izleme programları gibi faaliyetlerle, ekosistemlerin bütünlüğü ve sağlığı korunur. Eğitim ve farkındalık programları aracılığıyla, yerel topluluklar ve kamuoyunun biyolojik çeşitliliğin önemi konusunda bilinçlenmesi sağlanır. Bu program, ekosistemlerin direncini artırarak, çevresel sürdürülebilirliği ve biyolojik çeşitliliğin geleceğini güvence altına almayı hedefler.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center">
    <p>&copy; 2024 Sustainable Solutions Initiative. Tüm hakları saklıdır.</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





  