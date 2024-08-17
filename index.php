<?php
require '../function/home.php';
$judul = home()['judul'];
$produk = home()['produk'];

//keranjang
if (isset($_POST['cart'])) {
    if (cekLogin() === true) {
        tambahCart($_POST);
    } else {
        $_SESSION['pesan'] = "Anda belum masuk!! Silahkan masuk terlebih dahulu!";
    }
}

require 'templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('<?= url ?>assets/images/pages/bg.jpeg'); /* Ganti dengan URL gambar background Anda */
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= url ?>assets/images/pages/Talikur.jpeg" class="d-block w-95 mx-auto" alt="Tali kur.jpeg">
        </div>
        <div class="carousel-item">
            <img src="<?= url ?>assets/images/pages/bnr12.jpg" class="d-block w-100 mx-auto" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row mt-5">
    <div class="col py-3 text-center" style="font-style: Rockwell; font-size: 20px; color:brown;">
        <span class="small-heading">MD TALIKUR  adalah sebuah outlet yang bergerak di perlengkapan Pramuka Indonesia, yang berdiri sejak tahun 2010. MD Tali Kur menyediakan berbagai macam tali kur pramuka yang dirancang untuk memenuhi kebutuhan sekolah dan organisasi pramuka di seluruh Indonesia. Kami berkomitmen untuk memberikan produk dengan kualitas terbaik yang tahan lama dan fungsional. Dengan dedikasi pada kualitas dan layanan pelanggan, kami telah menjadi salah satu produsen tali kur terpercaya di daerah kami.<span>
   
    </div>
</div>
<br>

<div class="row bg-light my-5 p-3" style="margin: 0 -50px">
    <div class="col">
        <div class="row">

        </div>
    </div>
</div>

<?= require 'templates/footer.php'; ?>
