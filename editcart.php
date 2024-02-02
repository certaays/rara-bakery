<?php
    session_start();
    include "koneksi.php";
    $id_cart=$_POST['id_cart'];
    $jumlah=$_POST['jumlah'];
    $harga_produk=$_POST['harga_produk'];
    $hargat=$jumlah*$harga_produk;
   
    $query=mysqli_query($konek, "UPDATE cart set jumlah='$jumlah', hargatotal='$hargat' where id_cart='$id_cart'")
    or die(mysqli_error($konek));
    
    if($query)
    {
        header("Location: cart.php");
    }