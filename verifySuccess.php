<?php
include('php/db.php');
if (isset($_POST['submit'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $bindo = $_POST['bindo'];
    $mtk = $_POST['mtk'];
    $ipa = $_POST['ipa'];
    $ips = $_POST['ips'];

    $sql = mysqli_query($conn, "INSERT INTO student(nisn, nama, alamat, jenis_kelamin, agama, bindo, mtk, ipa, ips) VALUES ('$nisn','$nama', '$alamat', '$jenis_kelamin', '$agama', '$bindo', '$mtk', '$ipa', '$ips');");
    if ($sql) {
        echo "<script>alert('Registrasi berhasil');
        window.location.href='index.php'
        </script>";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    h1{
      position: absolute;
			left: 130px;
			top: 55px;
			color: white;
      font-size:50px;
    }
  </style>
</head>
<body">

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 mt-5 pt-5">
        
        <div class="card" >
          <img src="img/login.jpg" class="card-img-top" alt="..." style="width:100%; height:11rem; opacity:0.8;">
          <h1>Data Diri</h1>
          <div class="card-body">
          <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NISN</label>
                            <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" autocomplete="off" required>
                        </div>
                        <div class="input-group mb-3">
                        <label for="exampleInputEmail1">Jenis Kelamin</label><hr>
                          <select class="form-select" name="jenis_kelamin" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="laki-lakai">Lak-laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                        <label for="exampleInputEmail1">Agama</label><hr>
                          <select class="form-select" name="agama" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Islam</option>
                            <option value="kristen">Kristen</option>
                          </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Nilai B.Indo</label>
                                <input type="number" name="bindo" class="form-control" placeholder="..." autocomplete="off" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Nilai MTK</label>
                                <input type="number" name="mtk" class="form-control" placeholder="..." autocomplete="off" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Nilai IPA</label>
                                <input type="number" name="ipa" class="form-control" placeholder="..." autocomplete="off" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Nilai IPS</label>
                                <input type="number" name="ips" class="form-control" placeholder="..." autocomplete="off" required>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>