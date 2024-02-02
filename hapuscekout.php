<?php
    session_start();
    include "koneksi.php";
    
    if(!empty($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        $query = mysqli_query($konek, "SELECT * FROM user where email='$email'");
        $data2=mysqli_fetch_array($query);
        $id_user=$data2['id_user'];
    }
    else
    {
        header("location:login.php");
    }

    $que=mysqli_query($konek, "SELECT * FROM cart where id_user='$id_user'");
    while($isi=mysqli_fetch_array($que)){
        $delete=mysqli_query($konek, "DELETE FROM cart where id_cart='$isi[id_cart]'");
        
    }
    header("Location: cart.php?message=success");
?>