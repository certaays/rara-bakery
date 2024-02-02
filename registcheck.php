<?php
    session_start();
    include "koneksi.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_check = mysqli_num_rows(mysqli_query($konek,"SELECT * from user WHERE email = '$email'"));

    if($user_check > 0)
    {
        header("location:registrasi.php?pesan=gagal");
    }
    else
    {
        $query = mysqli_query($konek, "INSERT INTO user VALUES ('','$nama','$email','$password','','')") 
        or die(mysqli_error($konek));

        if($query)
        {
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:index.php");
        }
        else{
            echo "Proses input gagal";
        }
    }
?>