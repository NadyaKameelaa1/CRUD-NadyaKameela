<?php

$conn = mysqli_connect(hostname: "localhost",username: "root",password: "",database: "penjualan");

$id_barang=$_GET['id_barang'];

mysqli_query($conn, "DELETE FROM penjualan WHERE id_barang = '$id_barang'");

$sql = "DELETE FROM barang WHERE id_barang = '$id_barang'";
$query = mysqli_query($conn, $sql);

if($query){
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'barang.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'barang.php';
        </script>
        ";
}

?>