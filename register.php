<?php
$servername = "localhost";
$username = "kullanici_adiniz";
$password = "sifreniz";
$database = "veritabani_adiniz";

// MySQL bağlantısı oluştur
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
