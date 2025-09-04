<?php
require "fungsi.php";

$dataJoin = tampil(
    "SELECT p.nama_pembeli, b.nama_barang, b.stok 
    FROM penjualan pen 
    JOIN pembeli p ON pen.id_pembeli = p.id_pembeli 
    JOIN barang b ON pen.id_barang = b.id_barang"
    );
$no = 1;

if(isset($_POST['cari'])){
    $dataJoin = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Tampilan Data</title>
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

    <div class="container mt-4">
  <h3 class="mb-3">Tabel Penjualan</h3>

  <div class="card shadow-sm border-0">
    <div class="card-body d-flex justify-content-between align-items-center">
      
      <form action="" method="post" class="d-flex flex-fill me-2">
        <input type="text" name="keyword" placeholder="Masukkan keyword pencarian..." 
               autocomplete="off" class="form-control me-2">
        <button name="cari" class="btn btn-secondary">Cari</button>
      </form>

      <a href="tambah_penjualan.php" class="btn btn-success">
        + Tambah Penjualan
      </a>
    </div>
  </div>




    <div class="card mt-4 shadow border-0">
      <div class="card-body">
         <table class="table table-bordered table-striped table-hover align-middle text-center">
          <thead class="table-dark text-center">
            <tr>
              <th>No</th>
              <th>Nama Pembeli</th>
              <th>Nama Barang</th>
              <th>Stok</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataJoin as $rows): ?>
            <tr>
              <td class="text-center"><?= $no++; ?></td>
              <td><?= $rows['nama_pembeli']; ?></td>
              <td><?= $rows['nama_barang']; ?></td>
              <td class="text-center"><?= $rows['stok']; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
