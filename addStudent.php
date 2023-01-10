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

    $sql = mysqli_query($conn, "INSERT INTO siswa(nisn, nama, alamat, jenis_kelamin, agama, BINDO, MTK, IPA, IPS, token) VALUES ('$nisn','$nama', '$alamat', '$jenis_kelamin', '$agama', '$bindo', '$mtk', '$ipa', '$ips');");
    if ($sql) {
        echo "<script>alert('Registrasi berhasil');
        window.location.href=listStudent.php'
        </script>";
        
    }
}

?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Siswa Baru</h1>
    </div>

    <!-- Content Row -->
    <div class="row-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Data Siswa
                    <a href="dataSiswa.php" class="btn btn-danger float-right">Back</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="custom-select">
                                <option selected>Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Agama</label>
                            <select name="agama" class="custom-select">
                                <option selected>Agama</option>
                                <option value="islam">Islam</option>
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Token</label>
                            <input type="text" name="token" class="form-control" placeholder="Masukkan Token" autocomplete="off" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'footer.php'; ?>