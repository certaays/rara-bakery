<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>
    <?php 
    include "nav.php";
    $email=$_SESSION['email'];
    if(!empty($_SESSION['email']))
    {
        $query = mysqli_query($konek, "SELECT * FROM user where email='$email'");
        while($data2=mysqli_fetch_array($query)){
        $id_user=$data2['id_user'];
        }
    }
    else
    {
        header("location:login.php?pesan=belum_login");
    }
    $query=mysqli_query($konek, "SELECT * from user where id_user='$id_user'");
    $data=mysqli_fetch_array($query);
    ?>
    <div class="card mx-auto m-5 ps-3 pt-2" style="width: 25rem;">
    <h5 class="text-center">Edit Profil</h5>
    <form action="proseseditprofil.php" method="POST">
    <input type="hidden" name="id_user" id="" value="<?php echo $data['id_user'];?>">
    <h6>Nama</h6>
    <input type="text" name="nama_user" id="" value="<?php echo $data['nama_user'];?>"><br><br>
    <h6>Alamat</h6>
    <input type="text" name="alamat" id="" value="<?php echo $data['alamat'];?>"><br><br>
    <h6>Nomor HP</h6>
    <input type="text" name="no_hp" id="" value="<?php echo $data['no_hp'];?>"><br><br>
    <input type="submit" value="Save Changes" class="btn btn-dark">
    </form>
    <br>
    </div>
    <br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>