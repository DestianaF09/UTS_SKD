<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

require "php/caesar.php";

$hashPassword = enkripsi(preg_replace("/[^A-Za-z]/", "", $_SESSION['password']), 7);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body">
  <!-- navbar -->
  <?php require "components/navbar.php"?>
  <!-- /navbar -->

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card text-center">
          <?php if($_SESSION['rule'] == 'user'){ ?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/image.png" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA NEGERI 5 SURAKARTA</h5>
              <p class="card-text">Your token : <b disabled="disabled" class="badge bg-dark"><?= $hashPassword ?></b></p>
              <p class="card-text">Gunakan Token ini untuk mendaftar di Sekolah ini </p>
              <a href="verify.php" class="btn btn-success">Daftar Sekarang</a>
            </div>
          <?php } else if ($_SESSION['rule'] == 'admin') {?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/smalis.jpg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA NEGERI 5 SURAKARTA</h5>
              <button class="btn btn-warning" style="width:100%;">ADMIN DASHBOARD</button>
            </div>
          <?php } else {?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME</h5>
            <div class="card-body">
              <img src="img/school.jpeg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA NEGERI 5 SURAKARTA</h5>
              <p class="card-text">Selamat datang di website SMA NEGERI 5 SURAKARTA. SMAN 5 Surakarta merupakan salah satu SMA terbaik di Surakarta,dengan banyak prestasi dan beragam ekstrakulikuler maupun organisasi yang mendidik serta masih banyak lagi. Daftarkan dirimu dan jadi bagian dari kami. Register dan masukkan nilaimu untuk mendaftar di sekolah ini.</p>
              <a href="register.php" class="btn btn-warning">Register now</a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>