<?php

$conn = mysqli_connect("localhost","root","","penjualan");

function tampil($query){
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah_pembeli($data){
    global $conn;

    $nama_pembeli = $_GET['nama_pembeli'];
    $alamat = $_GET['alamat'];
    $no_telp = $_GET['no_telp'];
    $query = "INSERT INTO pembeli VALUES ('','$nama_pembeli','$alamat',$no_telp)";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah_penjualan($data){
    global $conn;

    $id_pembeli  = $data['id_pembeli'];
    $id_barang   = $data['id_barang'];
    $jumlah_beli = $data['jumlah_beli'];

    $query = "INSERT INTO penjualan (id_pembeli, id_barang, jumlah_beli) 
              VALUES ('$id_pembeli', '$id_barang', '$jumlah_beli')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah_barang($data){
    global $conn;

    $nama_barang = $_GET['nama_barang'];
    $stok = $_GET['stok'];
    $harga = $_GET['harga'];
    $query = "INSERT INTO barang VALUES ('','$nama_barang',$stok,$harga)";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit_pembeli($data){
    global $conn;

    $id_pembeli = $_GET['id_pembeli'];
    $nama_pembeli = htmlspecialchars($_GET['nama_pembeli']);
    $alamat = htmlspecialchars($_GET['alamat']);
    $no_telp = $_GET['no_telp'];

    $query = "UPDATE pembeli SET nama_pembeli = '$nama_pembeli', alamat = '$alamat', no_telp = $no_telp WHERE id_pembeli = $id_pembeli";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit_barang($data){
    global $conn;

    $id_barang = $_GET['id_barang'];
    $nama_barang = htmlspecialchars($_GET['nama_barang']);
    $stok = $_GET['stok'];
    $harga = $_GET['harga'];

    $query = "UPDATE barang SET nama_barang = '$nama_barang', stok = $stok, harga = $harga WHERE id_barang = $id_barang";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    global $conn;

    $keyword = mysqli_real_escape_string($conn, $keyword);

    
    $query = "SELECT p.nama_pembeli, b.nama_barang, b.stok
              FROM penjualan pen
              JOIN pembeli p ON pen.id_pembeli = p.id_pembeli
              JOIN barang b ON pen.id_barang = b.id_barang
              WHERE p.nama_pembeli LIKE '%$keyword%' OR b.nama_barang LIKE '%$keyword%'";

    return tampil($query);
}

?>