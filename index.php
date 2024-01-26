<?php
$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "webproje";

$baglanti=mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti,"UTF8");
if ($baglanti) {
    echo "Veritabanı bağlantısı başarılı";
}

?>