<?php

session_start();
include('php/db.php');
$query = mysqli_query($conn, "SELECT *FROM student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body">
  <!-- navbar -->
  <?php require "components/navbar.php"?>
  <!-- /navbar -->

  <!-- content -->
  <div class="container">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Siswa Baru</h1>
    </div>

    <!-- Content Row -->
    <div class="row-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa Baru
                    <a href="verifySuccess.php" class="btn btn-primary float-right">Add Siswa</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $row) {
                            ?>
                                <tr>
                                    <td><?= $row['nisn']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['alamat']; ?></td>
                                    <td><?= $row['jenis_kelamin']; ?></td>
                                    <td><?= $row['agama']; ?></td>
                                    <td>

                                        <a href="cekNilai.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm">Check Nilai</a>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="deleteSiswa.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
  <!-- /content -->
</body>
</html>