<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deneme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>Document</title>
</head>
<body>
<section id="menu">
    <div class="logo">
        <img style="width: 206 372px;height: 53 91px;" src="logom5-removebg-preview (1).png" alt="">
    </div>

    <nav>
        <a href="#"><i class="fa-solid fa-home"></i> ANASAYFA</a>  
        <a href="hakkımızda.html"><i class="fa-solid fa-magnifying-glass"></i> HAKKIMIZDA</a>    
    <div class="dropdown">
        <a href="#"><i class="fa-solid fa-laptop"></i> ÜRÜNLER</a>
        <div class="dropdown-content">
            <a href="#">Laptop Bilgisayar</a>
            <a href="#">Monitör</a>
            <a href="#">İşlemci</a>
            <a href="#">Ekran Kartı</a>
        </div>
    </div>
        <a href="#"><i class="fa-solid fa-phone"></i> İLETİŞİM</a>
        <a href="http://localhost/webproje/yenikayit.php"><i class="fa-solid fa-user"></i> GİRİŞ</a>
    </nav>
</section>

<script src="script.js"></script>

<section id="anasayfa">
        <p>Bilgisayar dünyasının derinliklerine doğru bir yolculuğa çıkmaya hazır mısınız? <br>
            En son teknolojilere göz atın, güçlü bilgisayar parçalarını keşfedin ve dijital deneyiminizi bir üst seviyeye taşımak için ilk adımınızı atın!</p>
         <a href="#" class="btnknk">Başla</a> 
    <div id="arka"></div>
</section>
   
    <section class="menum">
        <h1 class="heading">Çok Satanlar <span></span></h1>
    </section>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 3, // Gösterilecek öğe sayısı
                loop: true, // Sonsuz döngü
                autoplay: true, // Otomatik oynatma
                autoplayTimeout: 2500, // Otomatik oynatma süresi (ms)
            });
        });
    </script>
    
        <!-- Diğer çok satan bilgisayar modellerini ekleyin -->
        <script src="script.js"></script>
        <div class="slider owl-carousel" id="slider">
            <img style="width: 370px;" src="resimler/AEROX 3 KABLOSUZ GHOST.png" alt="Resim 1">
            <img style="width: 370px;" src="resimler/pebble 2 M350S.webp" alt="Resim 2">
            <img style="width: 370px;" src="resimler/omen.jpg" alt="Resim 3">
            <img style="width: 370px;" src="resimler/hyperx_cloud_stinger_1_main_900x-removebg-preview.png" alt="Resim 3">
            <img style="width: 370px;" src="resimler/ASUS ROG.jpg" alt="Resim 3">
        </div>
        
    

    <section class="menum">
        <h1 class="heading">LAPTOP <span></span></h1>
    </section>
        
    <div id="icerik" class="computer-container">
        <div class="computer-box">
            <img src="resimler/omen.jpg" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>HP Omen</h4>
            <br>
         <p><b>$1500</b></p>
        </div>

        <div class="computer-box">
            <img src="resimler/victus.jpg" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>HP Victus</h4>
            <br>
         <p><b>$1750</b></p>
        </div>

        <div class="computer-box">
            <img src="resimler/asus rog.webp" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>ASUS Rog</h4>
            <br>
         <p><b>$2000</b></p>
        </div>

        <div class="computer-box">
            <img src="resimler/gaming.jpg" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>HP Pavilion Gaming</h4>
            <br>
         <p><b>$1200</b></p>
        </div>
    </div>

    <div id="icerik2" class="computer-container">
        <div class="computer-box">
            <img src="resimler/ASUS ROG.jpg" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>Asus Rog</h4>
        </div>

        <div class="computer-box">
            <img src="resimler/proArt studiobook.webp" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>Asus ProArt Studiobook</h4>
        </div>

        <div class="computer-box">
            <img src="resimler/zenbook pro.png" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>Asus Zenbook</h4>
        </div>

        <div class="computer-box">
            <img src="resimler/vivobook (2).png" alt="" style="width: 275px;height: 180px;margin-top: 50px;">
            <h4>Asus Vivobook</h4>
        </div>
    </div>
    <br><br>
    
    <section class="menum">
        <h1 class="heading">MONİTÖR <span></span></h1>
    </section>

    <div id="icerik7">
        <div class="computer-box">
            <img src="resimler/casper-nirvana-238-monitor.webp" alt="" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>Casper Nirvana 238</h4>
        </div>
        <div class="computer-box">
            <img src="resimler/dell 24 oyun monitörü.avif" alt="" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>Dell 24</h4>
        </div>
        <div class="computer-box">
            <img src="resimler/asusproartmoni.png" alt="VU279CFE" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>Asus ProArt Display PA248CRV</h4>
        </div>   
         <div class="computer-box">
         <img src="resimler/HP X27Q.jpg" alt="" style="width: 275px;height: 180px;margin-top: 20px;">
         <h4>HP X27Q </h4>
        </div>
    </div>

    <section class="menum">
        <h1 class="heading">FARE<span></span></h1>
    </section>

    <div id="icerik8">
        <div class="computer-box">
            <img src="resimler/AEROX 3 KABLOSUZ GHOST.png" alt="" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>SteelSeries Aerox 3</h4>
            <br>
         <p><b>$200</b></p>
        </div>
        <div class="computer-box">
            <img src="resimler/pebble 2 M350S.webp" alt="" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>Logitech Pebble 2 M350S</h4>
            <br>
         <p><b>$150</b></p>
        </div>
        <div class="computer-box">
            <img src="resimler/Pusat V8 MMO.webp" alt="VU279CFE" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>Monster Pusat V8 MMO</h4>
            <br>
         <p><b>$120</b></p>
        </div>   
         <div class="computer-box">
         <img src="resimler/rampage drop m3.png" alt="" style="width: 160px;height: 160px;margin-top: 20px;margin-left: 48px;margin-right: 48px;">
         <br><br>
         <h4>Rampage Drop M3</h4>
         <br>
         <p><b>$140</b></p>
        </div>
    </div>
        <br><br><br><br>

    <section class="menum">
            <h1 class="heading">KULAKLIK <span></span></h1>
    </section>

    <div id="icerik9">
        <div class="computer-box">
            <img src="resimler/artic_nova_7.png" alt="" style="width: 200px;height: 200px;margin-top: 20px;margin-left: 47.5;margin-right: 47.5">
            <h4>SteelSeries Arctis <br>Nova 7</h4>
            <br>
         <p><b>$750</b></p>
        </div>
        <div class="computer-box">
            <img src="resimler/hyperx_cloud_stinger_1_main_900x-removebg-preview.png" alt="" style="width: 200px;height: 200px;margin-top: 20px;margin-left: 47.5;margin-right: 47.5;">
            <h4>Hyperx Cloud <br>Stinger 900x</h4>
            <br>
         <p><b>$900</b></p>
        </div>
        <div class="computer-box">
            <img src="resimler/Marshall Major IV.jpg" alt="" style="width: 190px;height: 190px;margin-top: 20px;margin-left: 47.5;margin-right: 47.5;">
            <h4>Marshall Major IV</h4>
            <br>
            <p><b>$670</b></p>
           </div>
        
        <div class="computer-box">
            <img src="resimler/Rampage_SN-R10_ALQUIST-removebg-preview.png" alt="VU279CFE" style="width: 200px;height: 200px;margin-top: 20px;margin-left: 47.5;margin-right: 47.5;">
            <h4>Rampage R10 <br>Alquist</h4>
            <br>
         <p><b>$800</b></p>
        </div>   
         <div class="computer-box">
         <img src="resimler/1.JBL_TUNE_710BT_-removebg-preview.png" alt="" style="width: 190px;height: 190px;margin-top: 21px;margin-left: 47.5;margin-right: 47.5;">
         <br>
         <h4>Jbl Tune 710BT <br> Wireless</h4>
         <br>
         <p><b>$670</b></p>
        </div>
    </div>

    <section class="menum">
        <h1 class="heading">ÖZEL SERİ <span></span></h1>
    </section>
<section class="a">
    <div id="icerik4">
        <div class="computer-box">
            <img src="resimler/thinlbook.webp" alt="" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>Lenovo Thinkbook</h4>
            <img src="resimler/thinkbook.2.webp" alt="" style="width: 125px;height: 100px;margin-top: 20px;">
            <img src="resimler/thinkbook3.webp" alt="" style="width: 125px;height: 100px;margin-top: 20px;">
            <br>
         <p><b>$2500</b></p>
        </div>

        <div class="computer-box">
            <img src="resimler/thinkpad.webp" alt="" style="width: 275px;height: 180px;margin-top: 20px;">
            <h4>Lenovo Thinkpad</h4>
            <img src="resimler/thinkpad2.webp" alt="" style="width: 125px;height: 100px;margin-top: 20px;">
            <img src="resimler/thinkpad3.webp" alt="" style="width: 125px;height: 100px;margin-top: 20px;">
            <br>
         <p><b>$2700</b></p>
        </div>
    </div>
</section>
<h1 style="margin-left: 90px;" class="headingo">İŞLEMCİ <span></span></h1>
<div class="islemci">

    <br><br>
    <div class="intel">
        <img style="width: 275px;height: 180px;" src="resimler/intelcorei9.webp" alt="">
        <h4 style="margin-left: 100px;">INTEL Core I9</h4>
    </div>
    <div class="amd">
        <img style="width: 275px;height: 180px;"  src="resimler/amdryzen9.png" alt="">
        <h4 style="margin-left: 100px;">AMD RYZEN9</h4>
    </div>

</div>
<h1 style="margin-left: 70%;margin-top: -22%;" class="headingo">EKRAN Kartı <span></span></h1>
<div class="ekart">
   <div class="asus">
    <img style="width: 275px;height: 180px;" src="resimler/tuf-rtx4090-24g-gaming-0_large-removebg-preview.png" alt="">
    <h4>ASUS RTX4090</h4>
   </div>
   <div class="gforce">
    <img style="width: 275px;height: 180px;" src="resimler/geforce rtx4060ti.jpg" alt="">
    <h4>GEOFORCE RTX4060TI</h4>
   </div>
</div>


    

    
    <div class="cont">
        <div class="slider"></div>
        <ul class="nav"></div>
        <div data-target='right' class="side-nav side-nav--right"></div>
        <div data-target='left' class="side-nav side-nav--left"></div>
    </div>
    <div id="slideshow-container">
        <img class="mySlidess" src="resimler/ARCTİS_PRO_-_Hİ-RES-removebg-preview.png" alt="Image 1">
        <img class="mySlidess" src="thinkpad2.webp" alt="Image 2">
        <img class="mySlidess" src="thinkpad3.webp" alt="Image3">
        <img class="mySlidess" src="resimler/" alt="Image 3">
        <img class="mySlidess" src="amdryzen9.webp" alt="Image 3">
        <img class="mySlidess" src="intelcorei9.webp" alt="Image 3">
        <img class="mySlidess" src="tuf-rtx4090-24g-gaming-0_large.webp" alt="Image 3">
        <img class="mySlidess" src="asus monitör.webp" alt="Image 3">
        <img class="mySlidess" src="monster monitör.webp" alt="Image 3">
        <!-- Eklemek istediğiniz diğer resimleri buraya ekleyebilirsiniz -->
    </div>
    <div class="gallery-container">
        <div class="sliderk">
            <img src="amdryzen9.webp" alt="Image 1">
            <img src="asus rog.webp" alt="Image 2">
            <img src="semruk.webp" alt="Image 3">
            <!-- Diğer fotoğrafları ekleyebilirsiniz -->
        </div>
        <button class="prev-btn">&lt;</button>
        <button class="next-btn">&gt;</button>
    </div>
    <script src="script.js"></script>
    
    
    <section id="haberler">
        <h2>Haberler</h2>
        <div class="haber-karti" id="haber-1">
            <img src="resimler/casperbina.webp" alt="Haber 1 Resmi">
            <h3>Casper, 2023 yılında yüzde 50 büyüme kaydettiğini açıkladı</h3>
            <p>Casper, 2023 yılı büyüme rakamlarını açıkladı. 2023 yılında yüzde 50 büyüme kaydettiğini belirten Casper, 2024 yılında yüzde 40 büyüme hedeflediğini açıkladı.</p>
        </div>

        <div class="haber-karti" id="haber-2">
            <img src="haber2.jpg" alt="Haber 2 Resmi">
            <h3>Başlık 2</h3>
            <p>Haber içeriği buraya gelecek. Bu kısım haberin kısa bir özetini içerebilir.</p>
        </div>

        <!-- İsterseniz daha fazla haber kartını ekleyebilirsiniz -->

    </section>

    <div class="flarumtr-footer">
        <div class="flarumtr-ust">
            <div class="footergizle">
                <span>
    <a href="https://flarumtr.com/p/5-hakkimizda" style="color:#667c99;">Hakkımızda</a> &sdot;
    <a href="cerezler.html" style="color:#667c99;">Çerez Politikası</a> &sdot;
    <a href="https://flarumtr.com/p/2-gizlilik-ilkesi" style="color:#667c99;">Gizlilik İlkesi</a>
            </span>
            </div>
            <div>
                <span>2024 &copy;  NURDTECH.COM</span> [BETA 9] -Tüm Hakları Saklıdır
            </div>
            <div class="footergizle">
          <div class="social">
                    <button class="icon-btn youtube"> 
                <a class="link" href="https://www.youtube.com/@KastamonuUniversitesiYT"  target="_blank">
              <i class="fab fa-youtube"></i>
                </a>
                <button class="icon-btn twitter"> 
                <a class="link" href="https://twitter.com/flarumtr" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <button class="icon-btn instagram"> 
                <a class="link" href="https://tr.pinterest.com/flarumtr/"  target="_blank">
                    <i class="fab fa-pinterest"></i>
                </a>
                    <button class="icon-btn discord"> 
                <a class="link" href="https://discord.gg/PQNfrP" target="blank">
                    <i class="fab fa-discord"></i>
                </a>
            </div>	
        </div>
        </div>
        <script>
            document.getElementById('.computer-box').addEventListener('click', function() {
              document.getElementById('footer').scrollIntoView({ behavior: 'smooth' });
            });
          </script>
           <script>
            document.getElementById('favori').addEventListener('click', function() {
              document.getElementById('ürünler3').scrollIntoView({ behavior: 'smooth' });
            });
          </script>
         
</body>
</html>