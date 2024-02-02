<?php
    session_start();
    include "koneksi.php";
    $id_cart=$_GET['id_cart'];
    $query=mysqli_query($konek, "DELETE FROM cart where id_cart='$id_cart'");
    if($query)
    {
        header("Location: cart.php");
    }
    else
    {
        echo "Proses gagal";
    }
?>