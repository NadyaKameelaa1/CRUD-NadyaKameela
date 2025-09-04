<?php

require "fungsi.php";

$id_barang = $_GET['id_barang'];
$dataBarang = tampil("SELECT * FROM barang WHERE id_barang = '$id_barang'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Detail</title>
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
    <h3>Detail Barang</h3>
    <div class="card shadow-sm border-0">
    <div class="card-body">
        <?php foreach ($dataBarang as $rows): ?>
    
        <h5 class="card-header">Nama Barang : <?= $rows['nama_barang']; ?></h5>
        <div class="card-body">
            <h5 class="card-title">Harga : Rp <?= number_format($rows['harga'], 0, ',', '.'); ?></h5>
            <h5  class="card-text">Stok : <?= $rows['stok']; ?></h5>
        </div>
    </div>
    </div>
    
    <br>
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <a href="barang.php" class="btn btn-primary">Kembali</a>
            <a href="edit_barang.php?id_barang=<?=$rows['id_barang'];?>" class="btn btn-success">Edit</a>
            <a href="delete_barang.php?id_barang=<?=$rows['id_barang'];?>" class="btn btn-danger">Delete</a>
        </div>
    </div>

    <?php endforeach; ?>
</body>
</html>