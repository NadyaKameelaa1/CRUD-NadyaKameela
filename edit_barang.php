<?php
require "fungsi.php";

$id_barang = $_GET['id_barang'];
$editBarang = tampil("SELECT * FROM barang WHERE id_barang = $id_barang");

if(isset($_GET['rubah'])){
    if(edit_barang($_GET)>0){ 
?>
    
    <script>
        alert("data berhasil diubah!");
        document.location.href= 'barang.php';
    </script>

<?php }else{ ?>
    
    <script>
        alert("data gagal diubah!");
        document.location.href= 'barang.php';
    </script>

<?php }
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Ubah Data</title>
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
    <h3>Edit Barang</h3>
    <div class="card shadow-sm border-0">
    <div class="card-body">
    <form action="" method="">
        <?php foreach($editBarang as $rows): ?>
        <input type="hidden" name="id_barang" value="<?= $rows['id_barang']; ?>">

        <label for="nama_barang" class="form-label"><b>Nama Barang :</b></label><br>
        <input type="text" name="nama_barang" id="nama_barang" value="<?= $rows['nama_barang']; ?>" class="form-control"><br><br>

        <label for="stok" class="form-label"><b>Stok :</b></label><br>
        <input type="text" name="stok" id="stok" value="<?= $rows['stok']; ?>" class="form-control"><br><br>

        <label for="harga" class="form-label"><b>Harga :</b></label><br>
        <input type="text" name="harga" id="harga" value="<?= $rows['harga']; ?>" class="form-control"><br><br>

        <?php endforeach; ?>
        <input type="submit" name="rubah" value="Edit Data" class="btn btn-success">
    </form>
    </div>
    </div>
    </div>
</body>
</html>