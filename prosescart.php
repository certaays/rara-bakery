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
    $id_produk=$_GET['id_produk'];
    $harga_produk=$_GET['harga_produk'];
    $jumlah=$_GET['jumlah'];
    $query=mysqli_query($konek, "SELECT * FROM cart WHERE id_produk=$id_produk && id_user=$id_user");
    $data=mysqli_fetch_array($query);
    if(!isset($data))
    {
        $hargat=$jumlah*$harga_produk;
        $query=mysqli_query($konek, "INSERT INTO cart VALUES ('','$id_user','$id_produk','$jumlah','$hargat')")
        or die(mysqli_error($konek));
    }
    else
    {
        $jumlaht=$data['jumlah']+$jumlah;
        $hargat=$jumlaht*$harga_produk;
        $query=mysqli_query($konek, "UPDATE cart set jumlah='$jumlaht', hargatotal='$hargat' where id_produk='$id_produk' && id_user='$id_user'")
    	or die(mysqli_error($konek));
    }
    if($query)
    {
        header("Location: cart.php");
    }
    ?>
</body>
</html>