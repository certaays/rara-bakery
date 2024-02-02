<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>
    <?php 
    include "navadmin.php";
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
    <div class="card m-5 mx-auto p-5" style="width: 50rem;">
    <h3 class="text-center">Profil Admin</h3><br>
    <h6>Nama</h6><br>
    <p><?php echo $data['nama_user'];?></p><br>
    <h6>Alamat</h6><br>
    <p><?php echo $data['alamat'];?></p><br>
    <h6>Nomor HP</h6><br>
    <p><?php echo $data['no_hp'];?></p>
    <div class="row">
        <div class="col">
        <a href="editprofil.php" class="btn btn-dark">Edit</a>    
        </div>
        <div class="col text-end">
        <a href="logout.php" class="btn btn-dark">Sign Out</a>
        </div>
    </div>    
    </div>
    <br><br><br><br><br><br>  
    <?php include "footer.php"; ?>
</body>
</html>