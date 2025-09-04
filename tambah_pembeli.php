<?php
require "fungsi.php";

if(isset($_GET["kirim"])){
    if(tambah_pembeli($_GET)>0){
        ?>
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'pembeli.php';
        </script>
        
        <?php
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'pembeli.php';
        </script>
        ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Menambah Data</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg shadow-sm bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Data Penjualan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pembeli.php">Pembeli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang.php">Barang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">
    <br>
    
    <h3>Menambah Data Pembeli</h3>
    <div class="card shadow-sm border-0">
    <div class="card-body">
    <form action="" method="">
        <label for="nama_pembeli" class="form-label"><b>Nama Pembeli :</b></label><br>
        <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" placeholder="Masukkan nama pembeli..."><br><br>

        <label for="alamat" class="form-label"><b>Alamat :</b></label><br>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat..."><br><br>

        <label for="no_telp" class="form-label"><b>Nomor Telepon :</b></label><br>
        <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan nomor telepon..."><br><br>

        <input type="submit" name="kirim" class="btn btn-outline-success">

    </form>
    </div>
    </div>
    </div>
</body>
</html>