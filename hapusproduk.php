<?php
    session_start();
    include "koneksi.php";
    
    $id_produk =$_GET['id_produk'];
    $query=mysqli_query($konek,"DELETE FROM produk where id_produk='$id_produk'");
    
    if($query){
        header("Location: produkadmin.php");
    }
    else{
        echo "Proses Input gagal";
    }
?>