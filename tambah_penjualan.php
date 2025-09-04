<?php
require "fungsi.php";

if(isset($_GET["kirim"])){
    if(tambah_penjualan($_GET)>0){
        ?>
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        
        <?php
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
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
    <h3>Menambah Data Penjualan</h3>
    <div class="card shadow-sm border-0">
    <div class="card-body">
    <form action="" method="">
        <label for="id_pembeli">Pembeli :</label><br>
    <select name="id_pembeli" id="id_pembeli" required class="form-control">
        <option value="">-- Pilih Pembeli --</option>
        <?php
        $result = mysqli_query($conn, "SELECT id_pembeli, nama_pembeli FROM pembeli");
        while($row = mysqli_fetch_assoc($result)){
            echo "<option value='".$row['id_pembeli']."'>".$row['nama_pembeli']." - ".$row['id_pembeli']."</option>";
        }
        ?>
    </select><br><br>
    <label for="id_barang">Barang :</label><br>
    <select name="id_barang" id="id_barang" required class="form-control">
        <option value="">-- Pilih Barang --</option>
        <?php
        $result = mysqli_query($conn, "SELECT id_barang, nama_barang FROM barang");
        while($row = mysqli_fetch_assoc($result)){
            echo "<option value='".$row['id_barang']."'>".$row['nama_barang']." - ".$row['id_barang']."</option>";
        }
        ?>
    </select><br><br>
    <label for="jumlah_beli">Jumlah Beli :</label><br>
    <input type="number" name="jumlah_beli" id="jumlah_beli" required class="form-control" placeholder="Masukkan jumlah beli..."><br>

    <input type="submit" name="kirim" value="Tambah Penjualan" class="btn btn-success">

    </form>
    </div>
    </div>
    </div>
</body>
</html>