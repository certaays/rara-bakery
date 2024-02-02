<?php
    session_start();
    include "koneksi.php";
    $id_user=$_POST['id_user'];
    $nama_user=$_POST['nama_user'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];

    $query=mysqli_query($konek, "UPDATE user set nama_user='$nama_user', alamat='$alamat', no_hp='$no_hp' where id_user=$id_user")
    or die(mysqli_error($konek));
    
    if($query){
        header("Location: profil.php");
     }
     else{
         echo "proses input gagal";
     }
     
?>