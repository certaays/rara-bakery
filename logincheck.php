<?php
    session_start();
    include "koneksi.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "SELECT * FROM user WHERE email = '$email' && password = '$password'") 
    or die(mysqli_error($konek));

    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        if($email=='admin@gmail.com'&&$password=='admin')
        {
            header("Location: produkadmin.php");
        }
        else
        {
            header("location:index.php");
        }
    }
    else{
        header("location:login.php?pesan=gagal");
    }
?>