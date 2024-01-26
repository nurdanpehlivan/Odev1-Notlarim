<?php

    include("index.php");
    $parola_err="";
    $username_err="";
    $email_err="";
    $parolatkr_err="";
    if(isset($_POST["kaydet"]))
    {       
        if(empty($_POST["kullaniciadi"])){
            $username_err="kullanıcı adında boş bırakılmaz";
        }
        $name=$_POST["ad_soyad"];
        $email= $_POST["email"];
        $password=password_hash($_POST["parola"],PASSWORD_DEFAULT);

        $ekle="INSERT INTO webprojesi (ad_soyad, email, parola) VALUES ('$name','$email','$password')";
        $calistirekle=mysqli_query($baglanti,$ekle);
        if($calistirekle){
            echo '<div class="alert alert-success" role="alert"> KAYIT BAŞARIYLA EKLENDİ</div>';
        }
        else{
            echo '<div class="alert alert-danger" role="alert"> KAYIT BAŞARISIZ OLDU </div>';
        }
        mysqli_close($baglanti);
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ÜYE KAYIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <div class="container p-5">
            <div class="card p-5">
                        <form action="yeni_kayit.php" method="POST">
                        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kullanıcı adı</label>
                <input type="text" class="form-control is-invalid" id="exampleInputEmail1" name="kullaniciadi">
                <div id="validationServer03Feedback" class="invalid-feedback">
                   BU ALAN BOŞ BIRAKILAMAZ!
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control is-invalid" id="exampleInputEmail1" name="email">
                <div id="validationServer03Feedback" class="invalid-feedback">
                        BU ALAN BOŞ BIRAKILAMAZ!
                  </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PAROLA</label>
                <input type="password" class="form-control is-invalid" id="exampleInputPassword1" name="parola">
                <div id="validationServer03Feedback" class="invalid-feedback">
                BU ALAN BOŞ BIRAKILAMAZ!
    </div>

    </div>
            </div>

            <button type="submit" class="btn btn-primary" name="kaydet">KAYDET</button>
            </form>
            </div>
        </div>  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>