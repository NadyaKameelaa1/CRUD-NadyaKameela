<?php

$conn = mysqli_connect(hostname: "localhost",username: "root",password: "",database: "penjualan");

$id_pembeli=$_GET['id_pembeli'];

mysqli_query($conn, "DELETE FROM penjualan WHERE id_pembeli = '$id_pembeli'");

$sql = "DELETE FROM pembeli WHERE id_pembeli = '$id_pembeli'";
$query = mysqli_query($conn, $sql);

if($query){
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'pembeli.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'pembeli.php';
        </script>
        ";
}

?>